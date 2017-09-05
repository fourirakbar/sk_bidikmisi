<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sk;
use App\Mahasiswa;
use Illuminate\Support\Facades\DB;

class PencairanController extends Controller
{
    public function index() {
    	$data = Sk::all();
    	return view ('pencairan.index', compact('data'));
    }

    public function showmahasiswa($sk_id) {
    	$data = DB::table('mahasiswa')->select('*')->where('sk_id', '=', $sk_id)->get();
    	return view ('pencairan.mahasiswa', compact('data'));
    }

    public function carinrp(Request $request) {
      $cari = Mahasiswa::query()->join('sk', 'sk.id_sk','=','mahasiswa.sk_id')->where('nim_mahasiswa','=', $request->nrp)->get()[0];
      // dd($cari);
      return view('pencairan.hasil', compact('cari'));
    }
}
