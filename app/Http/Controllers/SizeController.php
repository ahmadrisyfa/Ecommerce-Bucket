<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Size;
use Illuminate\Size\Facades\Storage;

class SizeController extends Controller
{
    public function index(){
        $data = Size::all();
        return view('admin.size.index',compact('data'));
    }
    public function create(){
        return view('admin.size.create');
    }
    public function store(Request $request){
        $validasi = $request->validate([
            'nama' => 'required',
            'harga' => 'required',

        ]);
        Size::create($validasi);
        return redirect('admin/size')->with('berhasil', 'Data Telah Berhasil Di Tambahkan');
    }   
  
    public function edit($id){
        $data = Size::find($id);
        return view('admin.size.edit',compact('data'));
    }
    public function update(Request $request,$id){
        $daftar=[
            'nama' => 'required',
            'harga' => 'required',

        ];
        $validasi = $request->validate($daftar);      
        Size::where('id',$id)
        ->update($validasi);
        return redirect('admin/size')->with('berhasil','Data Berhasil Di Update');
    }
    public function destroy(size $size){
        Size::destroy($size->id);
        return redirect('admin/size')->with('berhasil','Data Berhasil Di Hapus');

    }
    
}
