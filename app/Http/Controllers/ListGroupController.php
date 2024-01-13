<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\ListGroup;
use App\Models\SettingFonnte;

class ListGroupController extends Controller
{
    public function index(){

        $data = ListGroup::all();

        return view('list-group.index', compact('data'));
    }

    public function updateGroup(){

        //Get Token
        $setting = SettingFonnte::all();
        $token = $setting[0]->token;

        //Update List WA Fonnte
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api.fonnte.com/fetch-group',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_HTTPHEADER => array(
            "Authorization: $token"
        ),
        ));

        $response = curl_exec($curl);

        curl_close($curl);
        $response = json_decode($response, true);

        if($response['status'] == true){
            //Get List Group WA Fonnte
            $curl = curl_init();

            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api.fonnte.com/get-whatsapp-group',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_HTTPHEADER => array(
                "Authorization: $token"
            ),
            ));

            $response = curl_exec($curl);
            curl_close($curl);
            $response = json_decode($response, true);
            if($response['status'] == true){
                $data = $response['data'];
                foreach($data as $dt) {
                    $id = $dt['id'];
                    $name = $dt['name'];
                    $cek = ListGroup::where('id_group', $id)->first();
                    if($cek){
                        $cek->update([
                            'nama_group' => $name
                        ]);
                    }else{
                        ListGroup::create([
                            'id_group' => $id,
                            'nama_group' => $name
                        ]);
                    }
                }
                return response()->json(['status' => true, 'message' => 'Update Group WA berhasil']);
            }
        }
        return response()->json(['status' => false, 'message' => 'Update Group WA gagal']);
    }
}
