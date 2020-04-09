<?php

namespace App\Http\Controllers;
use Session;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use App\DataMaps;
use App\Exports\LokasiExport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Support\Facades\Auth;

use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class MapsViewController extends Controller
{



    public function __construct()
    {
       // $this->redirectTo = route('login');
        //$this->middleware('guest', ['except' => 'logout']);
    }

    public function index(){
        $users = DB::select('select * from lokasi');
        return view('map_view',['users'=>$users]);
        }

        public function showMaps(){
            $users = DB::select('select * from lokasi');
            return view('table_maps',['users'=>$users]);
            }

            public function destroy($id) {
                DB::delete('delete from lokasi where id = ?',[$id]);
                echo '<script language="javascript">alert("Data Berhasil Dihapus")</script>';
                echo '<meta http-equiv="refresh" content="0; URL=../showmaps">';
                }

                public function export_excel()
                {
                    return Excel::download(new LokasiExport, 'LOKASI.xlsx');
                }

                public function uploadFile(Request $request){

                    if ($request->input('submit') != null ){

                      $file = $request->file('file');

                      // File Details
                      $filename = $file->getClientOriginalName();
                      $extension = $file->getClientOriginalExtension();
                      $tempPath = $file->getRealPath();
                      $fileSize = $file->getSize();
                      $mimeType = $file->getMimeType();

                      // Valid File Extensions
                      $valid_extension = array("csv");

                      // 2MB in Bytes
                      $maxFileSize = 2097152;

                      // Check file extension
                      if(in_array(strtolower($extension),$valid_extension)){

                        // Check file size
                        if($fileSize <= $maxFileSize){

                          // File upload location
                          $location = 'uploads';

                          // Upload file
                          $file->move($location,$filename);

                          // Import CSV to Database
                          $filepath = public_path($location."/".$filename);

                          // Reading file
                          $file = fopen($filepath,"r");

                          $importData_arr = array();
                          $i = 0;

                          while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                             $num = count($filedata );

                             // Skip first row (Remove below comment if you want to skip the first row)
                             /*if($i == 0){
                                $i++;
                                continue;
                             }*/
                             for ($c=0; $c < $num; $c++) {
                                $importData_arr[$i][] = $filedata [$c];
                             }
                             $i++;
                          }
                          fclose($file);

                          // Insert to MySQL database
                          foreach($importData_arr as $importData){

                            $insertData = array(
                               "nama_lokasi"=>$importData[1],
                               "latitude"=>$importData[2],
                               "longitude"=>$importData[3],
                               "keterangan"=>$importData[4],
                               "type"=>$importData[5]);
                            DataMaps::insertData($insertData);

                          }

                          Session::flash('message','Import Successful.');
                        }else{
                          Session::flash('message','File too large. File must be less than 2MB.');
                        }

                      }else{
                         Session::flash('message','Invalid File Extension.');
                      }

                    }

                    // Redirect to index
                    return redirect()->action('MapsViewController@showMaps');
                  }
}

