<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerBarang extends Controller
{
    public function index(){
        $mybarang = new ModelBarang();
        $barang = $mybarang->tampil_indukuser();
        
        $data = array('barang' => $indukuser);
        return view('barang/index', $data);
    }
}
