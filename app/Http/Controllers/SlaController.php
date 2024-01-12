<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\SLA;
use App\Models\SettingFonnte;

class SlaController extends Controller
{
    public function index(){
        //4cZWK@EJQWJWRAv3a!Mt

        // ambil data token dan id group di model setting
        $setting = SettingFonnte::all();
        $token = $setting[0]->token;
        $id_group = $setting[0]->id_group;

$curl = curl_init();

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
'target' => "$id_group",
'message' => 'test message Db',
),
  CURLOPT_HTTPHEADER => array(
    "Authorization: $token"
  ),
));

$response = curl_exec($curl);
if (curl_errno($curl)) {
  $error_msg = curl_error($curl);
}
curl_close($curl);

if (isset($error_msg)) {
 echo $error_msg;
}
echo $response;




        // $curl = curl_init();

        // curl_setopt_array($curl, array(
        //   CURLOPT_URL => 'https://api.fonnte.com/get-whatsapp-group',
        //   CURLOPT_RETURNTRANSFER => true,
        //   CURLOPT_ENCODING => '',
        //   CURLOPT_MAXREDIRS => 10,
        //   CURLOPT_TIMEOUT => 0,
        //   CURLOPT_FOLLOWLOCATION => true,
        //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        //   CURLOPT_CUSTOMREQUEST => 'POST',
        //   CURLOPT_HTTPHEADER => array(
        //     'Authorization: 4cZWK@EJQWJWRAv3a!Mt'
        //   ),
        // ));

        // $response = curl_exec($curl);

        // curl_close($curl);
        // $response = json_decode($response, true);
        // $data = $response['data'];
        // foreach($data as $dt) {
        //     echo $dt['id'];
        //     echo $dt['name'];
        // }




        // return view('sla.index');
    }

    public function create(){
        return view('sla.create');
    }

    public function store(Request $request){
        $sla = new SLA();
        $sla->name = $request->name;
        $sla->response = $request->response;
        $sla->resolution = $request->resolution;
        $sla->warning = $request->warning;
        $sla->save();
        return redirect()->route('sla.index')->with('info', 'SLA created successfully');

    }

    public function edit($id){
        $sla = SLA::find($id);
        return view('sla.edit', compact('sla'));
    }

    public function update(Request $request, $id){
        $sla = SLA::find($id);
        $sla->name = $request->name;
        $sla->response = $request->response;
        $sla->resolution = $request->resolution;
        $sla->warning = $request->warning;
        $sla->save();
        return redirect()->route('sla.index')->with('info', 'SLA Update successfully');
    }

    public function destroy($id){
        $sla = SLA::find($id);
        $sla->delete();
        return redirect()->route('sla.index');
    }

}
