<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sk extends Model
{
    public $table = "sk";
    public $fillable = array(
    	'nomor_sk',
    	'tahun_sk',
    	'jenis_sk',
    	'mahasiswa_sk',
    	'status_pencarian_sk',
    	'status_sk',
    	'tanggal_pengajuan_sk'
    );
    public $primaryKey = "id_sk";
}
