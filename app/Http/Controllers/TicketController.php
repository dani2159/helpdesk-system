<?php

namespace App\Http\Controllers;

use App\Models\Divisi;
use App\Models\SLA;
use App\Models\Ticket;
use App\Models\Employe;
use App\Models\SettingFonnte;
use CURLFile; // Added this line to import CURLFile class
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function index()
    {
        $sla = SLA::select('id', 'name')->get();
        $divisi = Divisi::select('id','id_group', 'nama_divisi')->get();

        return view('ticket.index', compact('sla', 'divisi'));
    }

    public function store(Request $request) {

        $validatedData = $request->validate([
            'file_upload' => 'sometimes|file|mimes:jpg,jpeg,png,gif,webp|max:2048', // 'sometimes' rule allows the field to be optional
        ]);



        // Check NIP Apakah ada atau tidak, jika tidak berikan notifikasi bahwa NIP tidak terdaftar
        if (!Employe::where('nip', request('nip'))->exists()) {
            return redirect()->back()->with('error', 'NIP tidak terdaftar.');
        }

        // Prepare data for new Ticket
        $ticketData = [
            'code_ticket' => 'TCK-' . time(), // Generate a unique code for the ticket
            'employes_id' => Employe::where('nip', request('nip'))->first()->id, // Assuming the user is authenticated
            'sla_id' => request('sla_id'),
            'divisi_id' => request('divisi_id'),
            'category' => request('category'),
            'title' => request('title'),
            'description' => request('description'),
            'status' => 0, // Default status: open
            'from_divisi_id' => request('from_divisi_id'),
        ];

        // Check if file_upload is present and valid
        if ($validatedData['file_upload'] ?? false) {
            $filename = 'ticket_' . time() . '.' . $validatedData['file_upload']->getClientOriginalExtension();

            $uploadPath = public_path('laporan');

            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0755, true); // Create 'laporan' directory if it doesn't exist
            }

            $validatedData['file_upload']->move($uploadPath, $filename);

            $ticketData['file_uploads'] = $filename; // Relative path in 'public'
        }


        $ticket = new Ticket($ticketData);
        if ($ticket->save()) {
            $setting = SettingFonnte::all();
            $token = $setting[0]->token;
            $id_group = $setting[0]->id_group;

            $curl = curl_init();

            $message = "Tiket Pelaporan telah dibuat dengan detail sebagai berikut:\n" .
                        "Kode Tiket: " . $ticketData['code_ticket'] . "\n" .
                        "Dari Unit: " . Divisi::find($ticketData['from_divisi_id'])->nama_divisi . "\n" .
                        "Pelapor: " . Employe::find($ticketData['employes_id'])->nama_pegawai. "\n" .
                        "Kategori: " . $ticketData['category'] . "\n" .
                        "SLA:" . SLA::find($ticketData['sla_id'])->name . "\n" .
                        "Trouble: " . $ticketData['title'] . "\n" .
                        "Deskripsi: " . $ticketData['description'] . "\n" .
                        "Status: Report Open \n".
                        "\n \n TIM IT Rayhan Hospital"
                        ;
            if ($validatedData['file_upload'] ?? false) {
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://api.fonnte.com/send',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => array(
                        'target' => "6289616169308",
                        'message' => $message,
                        'delay' => '2',
                        'file' => new CURLFile($uploadPath . '/' . $filename), // Pastikan path dan filename sudah benar
                        'filename' => $filename,
                        'countryCode' => '62',
                    ),
                    CURLOPT_HTTPHEADER => array(
                        "Authorization: $token"
                    ),
                ));
            }else {
                curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://api.fonnte.com/send',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'POST',
                    CURLOPT_POSTFIELDS => array(
                        'target' => "6289616169308",
                        'message' => $message,
                        'delay' => '2',
                        'countryCode' => '62',
                    ),
                    CURLOPT_HTTPHEADER => array(
                        "Authorization: $token"
                    ),
                ));

            }

            $response = curl_exec($curl);
            if (curl_errno($curl)) {
                $error_msg = curl_error($curl);
            }
            curl_close($curl);

            if (isset($error_msg)) {
                echo $error_msg;
            }


            return redirect()->back()->with('success','Ticket berhasil dibuat dengan code : '. $ticket->code_ticket);
        } else {
            return redirect()->back()->with('error','Ticket gagal dibuat, silahkan coba lagi');
        }
    }

    public function search(Request $request)
    {
        $query = $request->input('ticket');

        $tickets = Ticket::Where('code_ticket', 'like', "%$query%")->get();

        if ($tickets->count() == 1) {
            $ticket = $tickets->first();
            $ticket->progress = $this->calculateProgress($ticket);
            return view('ticket.progress', compact('ticket'));
        } else {
            return view('ticket.progress', compact('tickets'));
        }
    }

    private function calculateProgress(Ticket $ticket)
    {
        $statusWeights = [
            0 => 0,   // Open
            3 => 50,  // In Progress
            4 => 75,  // Resolved
            5 => 100, // Closed
        ];

        return $statusWeights[$ticket->status];
    }

}
