<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\indukuser_model;

class bunga_indukuserController extends Controller
{
    //
    public function index(){
        $myindukuser = new indukuser_model();
        $indukuser = $myindukuser->tampil_indukuser();
        
        $data = array('indukuser' => $indukuser);
        return view('indukuser/index', $data);
    }
    public function tambah(){
        // return ('Testing');
        return view('indukuser/tambah');
     }
 
     public function tambah_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('tbl_indukuser_bunga')
         ->insert([
             'id_user'  =>  $request->id_user,
             'username'  =>  $request->username,
             'tanggal_lahir'  =>  $request->tanggal_lahir,
             'nama_lengkap'  =>  $request->nama_lengkap,
             'email'  =>  $request->email
             
         ]);
         return redirect('indukuser');
     }
 
     public function edit($id){
         // return ('Testing');
        
         return view('indukuser/edit');
     }
 
     public function edit_proses(Request $request){
         // return ('Testing Proses');
         $query = \DB::table('tbl_indukuser_bunga')->where('id',$request->id)
         ->update([
            'id_user'  =>  $request->id_user,
             'username'  =>  $request->username,
             'tanggal_lahir'  =>  $request->tanggal_lahir,
             'nama_lengkap'  =>  $request->nama_lengkap,
             'email'  =>  $request->email
            
         ]);
         return redirect('indukuser');
     }
 
     public function delete ($id){
         $query = \DB::table('tbl_indukuser_bunga')->where('id',$id)->delete();
         return redirect('indukuser');
     }
 }
 

