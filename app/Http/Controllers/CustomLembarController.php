<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomLembar;
use Illuminate\Support\Facades\Storage;

class CustomLembarController extends Controller
{
    public function index(){
        $data = CustomLembar::all();
        return view('admin.custom_lembar.index',compact('data'));
    }
    public function create(){
        return view('admin.custom_lembar.create');
    }
    public function store(Request $request){
        $validasi = $request->validate([
            'nama' => 'required',
            'harga' => 'required',

        ]);
        CustomLembar::create($validasi);
        return redirect('admin/custom_lembar')->with('berhasil', 'Data Telah Berhasil Di Tambahkan');
    }   
  
    public function edit($id){
        $data = CustomLembar::find($id);
        return view('admin.custom_lembar.edit',compact('data'));
    }
    public function update(Request $request,$id){
        $daftar=[
            'nama' => 'required',
            'harga' => 'required',

        ];
        $validasi = $request->validate($daftar);      
        CustomLembar::where('id',$id)
        ->update($validasi);
        return redirect('admin/custom_lembar')->with('berhasil','Data Berhasil Di Update');
    }
    public function destroy(customlembar $customlembar){
        CustomLembar::destroy($customlembar->id);
        return redirect('admin/custom_lembar')->with('berhasil','Data Berhasil Di Hapus');

    }
    
}
