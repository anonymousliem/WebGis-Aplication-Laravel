<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DataMaps extends Model
{
    protected $table = "lokasi";

    protected $fillable = ['nama_lokasi','latitude','longitude', 'keterangan','info'];

    public static function insertData($data){

        $value=DB::table('lokasi')->where('nama_lokasi', $data['nama_lokasi'])->get();
        if($value->count() == 0){
           DB::table('lokasi')->insert($data);
        }
     }
}
