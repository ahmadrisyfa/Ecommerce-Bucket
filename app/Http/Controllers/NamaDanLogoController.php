<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NamaDanLogo;
use Illuminate\Support\Facades\Storage;

class NamaDanLogoController extends Controller
{
    public function index(){
        $data = NamaDanLogo::all();
        return view('admin.NamaDanLogo.index',compact('data'));
    }
    public function create(){
        return view('admin.NamaDanLogo.create');
    }
    public function store(Request $request){
        $validasi = $request->validate([
            'nama' => 'required|max:13',
            'gambar' => 'required|image'
        ]);
        $validasi['gambar'] = $request->file('gambar')->store('img-nama-dan-logo');
        NamaDanLogo::create($validasi);
        return redirect('admin/nama_dan_logo')->with('berhasil', 'Data Telah Berhasil Di Tambahkan');
    }
  
    public function edit($id){
        $data = NamaDanLogo::find($id);
        return view('admin.NamaDanLogo.edit',compact('data'));
    }
    public function update(Request $request,$id){
        $daftar=[
            'nama' => 'required|max:13',
            'gambar' => 'image'
        ];
        $validasi = $request->validate($daftar);
        if($request->file('gambar')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validasi['gambar'] = $request->file('gambar')->store('img-nama-dan-logo');        
        }
        NamaDanLogo::where('id',$id)
        ->update($validasi);
        return redirect('admin/nama_dan_logo')->with('berhasil','Data Berhasil Di Update');
    }
    public function destroy(NamaDanLogo $NamaDanLogo){
        Storage::delete($NamaDanLogo->gambar);
        NamaDanLogo::destroy($NamaDanLogo->id);
        return redirect('admin/nama_dan_logo')->with('berhasil','Data Berhasil Di Hapus');

    }
    
}
