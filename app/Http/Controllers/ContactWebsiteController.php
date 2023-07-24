<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactWebsite;
use Illuminate\Support\Facades\Storage;

class ContactWebsiteController extends Controller
{
    public function index(){
        $data = ContactWebsite::all();
        return view('admin.contact_website.index',compact('data'));
    }
    public function create(){
        return view('admin.contact_website.create');
    }
    public function store(Request $request){
        $validasi = $request->validate([
            'no_telp1' => 'required',
            'no_telp2' => '',
            'alamat' => 'required',
            'email' => 'required',

        ]);
        ContactWebsite::create($validasi);
        return redirect('admin/contact_website')->with('berhasil', 'Data Telah Berhasil Di Tambahkan');
    }
  
    public function edit($id){
        $data = ContactWebsite::find($id);
        return view('admin.contact_website.edit',compact('data'));
    }
    public function update(Request $request,$id){
        $daftar=[
            'no_telp1' => 'required',
            'no_telp2' => '',
            'alamat' => 'required',
            'email' => 'required',
        ];
        $validasi = $request->validate($daftar);
       
        ContactWebsite::where('id',$id)
        ->update($validasi);
        return redirect('admin/contact_website')->with('berhasil','Data Berhasil Di Update');
    }
    public function destroy(ContactWebsite $ContactWebsite){
        ContactWebsite::destroy($ContactWebsite->id);
        return redirect('admin/contact_website')->with('berhasil','Data Berhasil Di Hapus');

    }
    
}
