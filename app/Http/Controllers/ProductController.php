<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $data = Product::all();
        return view('admin.product.index',compact('data'));
    }
    public function create()
    {
        $category = Category::all();
        return view('admin.product.create',compact('category'));
    }
    public function show($id) 
    {
        $data = Product::find($id);
        return view('admin.product.detail',compact('data'));
    }
    public function store(Request $request)
    {
        $validasi = $request->validate([
            'nama' => 'required',
            'gambar' => 'required|image',
            'gambar2' => 'image',
            'gambar3' => 'image',
            'gambar4' => 'image',
            'gambar5' => 'image',

            'harga' => 'required',
            'category_id' => 'required',
            'deskripsi' => 'required',
        ]);
        // $validasi = $request->validate($daftar);
        if($request->file('gambar')){
            $validasi['gambar'] = $request->file('gambar')->store('img-product');        
        }
        if($request->file('gambar2')){
            $validasi['gambar2'] = $request->file('gambar2')->store('img-product');        
        }
        if($request->file('gambar3')){
            $validasi['gambar3'] = $request->file('gambar3')->store('img-product');        
        }
        if($request->file('gambar4')){
            $validasi['gambar4'] = $request->file('gambar4')->store('img-product');        
        }
        if($request->file('gambar5')){
            $validasi['gambar5'] = $request->file('gambar5')->store('img-product');        
        }
        if($request->deskripsi){
            $validasi['deskripsi'] =nl2br($request->deskripsi);
        }
        Product::create($validasi);

        return redirect('admin/product')->with('berhasil', 'Data Telah Berhasil Di Tambahkan');
    }
    public function edit($id)
    {
        $data = Product::find($id);
        $category = Category::all();
        return view('admin.product.edit',compact('data','category'));
    }
    public function update(Request $request,$id)
    {
        $daftar=[
            'nama' => 'required',
            'gambar' => 'image',
            'gambar2' => 'image',
            'gambar3' => 'image',
            'gambar4' => 'image',
            'gambar5' => 'image',
            'harga' => 'required',
            'category_id' => 'required',
            'deskripsi' => 'required',
        ];
        $validasi = $request->validate($daftar);
        if($request->file('gambar')){
            if($request->oldImage1){
                Storage::delete($request->oldImage1);
            }
            $validasi['gambar'] = $request->file('gambar')->store('img-product');        
        }
        if($request->file('gambar2')){
            if($request->oldImage2){
                Storage::delete($request->oldImage2);
            }
            $validasi['gambar2'] = $request->file('gambar2')->store('img-product');        
        }
        if($request->file('gambar3')){
            if($request->oldImage3){
                Storage::delete($request->oldImage3);
            }
            $validasi['gambar3'] = $request->file('gambar3')->store('img-product');        
        }
        if($request->file('gambar4')){
            if($request->oldImage4){
                Storage::delete($request->oldImage4);
            }
            $validasi['gambar4'] = $request->file('gambar4')->store('img-product');        
        }
        if($request->file('gambar5')){
            if($request->oldImage5){
                Storage::delete($request->oldImage5);
            }
            $validasi['gambar5'] = $request->file('gambar5')->store('img-product');        
        }
        if($request->deskripsi){
            $validasi['deskripsi'] =nl2br($request->deskripsi);
        }
        Product::where('id',$id)
        ->update($validasi);
        return redirect('admin/product')->with('berhasil','Data Berhasil Di Update');
    }
    public function destroy(product $product)
    {
        Storage::delete($product->gambar);
        
        if($product->gambar2){
        Storage::delete($product->gambar2);
        }

        if($product->gambar3){
        Storage::delete($product->gambar3);
        }

        if($product->gambar4){
        Storage::delete($product->gambar4);
        }

        if($product->gambar5){
        Storage::delete($product->gambar5);
        }

        Product::destroy($product->id);
        return redirect('admin/product')->with('berhasil','Data Berhasil Di Hapus');

    }
}
