<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public function showForm(){
        return view('account.create');
        }

    public function showData(){
        $users = DB::select('select * from users');
        return view('account.read',['users'=>$users]);
    }

    public function deleteAccount($id){
        DB::delete('delete from users where id = ?',[$id]);
        echo '<script language="javascript">alert("Data Berhasil Dihapus")</script>';
        echo '<meta http-equiv="refresh" content="0; URL=../table_user">';

    }

    public function show($id) {
        $users = DB::select('select * from users where id = ?',[$id]);
        return view('account.edit',['users'=>$users]);
        }

        public function edit(Request $request,$id) {
            $name = $request->input('name');
            $email = $request->input('email');
            $role = $request->input('role');
            $password = $request->input('password');
            if($role == 1){
                $status = 'admin';
            }
            if($role == 2){
                $status = 'operator';
            }
            if($role == 3){
                $status = 'user';
            }

            //$data=array('first_name'=>$first_name,"last_name"=>$last_name,"city_name"=>$city_name,"email"=>$email);
            //DB::table('student')->update($data);
            // DB::table('student')->whereIn('id', $id)->update($request->all());
            DB::update('update users set name = ?,email=?,role=?,password=?, status=? where id = ?',[$name,$email,$role,$password,$status, $id]);
            echo '<script language="javascript">alert("Data Berhasil Diubah")</script>';

            echo '<meta http-equiv="refresh" content="0; URL=../table_user">';
            }

    public function insertForm(Request $request){
            $name = $request->input('name');
            $email = $request->input('email');
            $role = $request->input('role');
            $password = $request->input('password');
            if($role == 1){
                $status = 'admin';
            }
            if($role == 2){
                $status = 'operator';
            }
            if($role == 3){
                $status = 'user';
            }

            $data=array('name'=>$name,"email"=>$email,"role"=>$role,"password"=>Hash::make($password),"status"=>$status);
            DB::table('users')->insert($data);
            echo '<script language="javascript">alert("Data Berhasil Ditambahkan")</script>';
            echo '<meta http-equiv="refresh" content="0; URL=../registeraccount">';

            }
}
