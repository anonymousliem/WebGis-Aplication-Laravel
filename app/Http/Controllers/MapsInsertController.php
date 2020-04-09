<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class MapsInsertController extends Controller {
public function insertform(){
echo '<script language="javascript">';
echo 'alert("message successfully sent")';
echo '</script>';
}

public function insert(Request $request){
$nama_lokasi = $request->input('nama_lokasi');
$latitude = $request->input('latitude');
$longitude = $request->input('longitude');
$keterangan = $request->input('keterangan');
$type = $request->input('type');
$data=array('nama_lokasi'=>$nama_lokasi,"latitude"=>$latitude,"longitude"=>$longitude,"keterangan"=>$keterangan, "type"=>$type);
DB::table('lokasi')->insert($data);
echo '<script language="javascript">alert("Data Berhasil Ditambahkan")</script>';

return redirect('maps');
// echo "Record inserted successfully.<br/>";
// echo '<a href = "/view-records">Click Here</a> to go back.';
}

}
