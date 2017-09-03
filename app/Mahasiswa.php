<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    public $table = "mahasiswa";
    public $fillable = array(
    	'nim_mahasiswa',
    	'nama_mahasiswa',
    	'program_studi_mahasiswa',
    	'semester_mahasiswa',
    	'no_rek_mahasiswa',
    	'bank_mahasiswa',
    	'status_mahasiswa',
    	'biaya_hidup_mahasiswa',
    	'sk_id'
    );
    public $primaryKey = "id_mahasiswa";
}
