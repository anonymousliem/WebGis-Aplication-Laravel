<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
class UpdateMapsController extends Controller
{



    public function __construct()
    {
       // $this->redirectTo = route('login');
        //$this->middleware('guest', ['except' => 'logout']);
    }
            public function show($id) {
                    $users = DB::select('select * from lokasi where id = ?',[$id]);
                    return view('updateMaps',['users'=>$users]);
                    }

                    public function edit(Request $request,$id) {
                       $nama_lokasi = $request->input('nama_lokasi');
                    $latitude = $request->input('latitude');
                    $longitude = $request->input('longitude');
                    $keterangan = $request->input('keterangan');

                        //$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
                        //DB::table('student')->update($data);
                        // DB::table('student')->whereIn('id', $id)->update($request->all());
                        DB::update('update lokasi set nama_lokasi = ?,latitude=?,longitude=?, keterangan=? where id = ?',[$nama_lokasi,$latitude,$longitude,$keterangan,$id]);
                        echo '<script language="javascript">alert("Data Berhasil Diubah")</script>';

                        return redirect('maps');
                        }

                    }

