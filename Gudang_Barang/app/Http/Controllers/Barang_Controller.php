<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;

class Barang_Controller extends Controller
{
    public function index(){
        $data_barang = Barang::all()->sortByDesc('id');
        return view('index', compact('data_barang'));
    }
}
