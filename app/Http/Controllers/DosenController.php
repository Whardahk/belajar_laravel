<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    public function index(){
        $dosen = DB::table('dosen')->get();
    	return view('dosen/index',['dosen' => $dosen]);
    }

    public function add_form(){
        return view('dosen/add_form');
    }

    public function store(Request $request){
        // insert data ke table dosen
        DB::table('dosen')->insert([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman dosen
        return redirect('/dosen');
    }

    // method untuk edit data dosen
    public function edit($id){
        // mengambil data dosen berdasarkan id yang dipilih
        $dosen = DB::table('dosen')->where('id',$id)->get();
        // passing data dosen yang didapat ke view edit.blade.php
        return view('dosen/edit',['dosen' => $dosen]); 
    }

    public function update(Request $request)
    {
        // update data dosen
        DB::table('dosen')->where('id',$request->id)->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'alamat' => $request->alamat
        ]);
        // alihkan halaman ke halaman dosen
        return redirect('/dosen');
    }

    // method untuk hapus data dosen
    public function delete($id){
        // menghapus data dosen berdasarkan id yang dipilih
        DB::table('dosen')->where('id',$id)->delete();
            
        // alihkan halaman ke halaman dosen
        return redirect('/dosen');
    }

    
}
