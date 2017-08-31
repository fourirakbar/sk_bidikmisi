<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CariController extends Controller
{
    public function index () {
    	return view ('cari');
    }

    public function index2() {
    	return view ('menu');
    }
}
