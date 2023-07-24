@extends('template.website.dashboard')
@section('content_website')
<section class="bg-success py-2" style="height: 400px">
    <div class="container">
        <div class="row align-items-center py-2">
            <div class="col-md-8 text-white">
                <h1>Checkout</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                </p>
            </div>
            <div class="col-md-4">
                <img src="{{asset('website')}}/assets/img/about-hero.svg" alt="About Hero">
            </div>
        </div>
    </div>
</section>
<div class="container py-5">
    <div class="container" style="margin-top:50px;margin-bottom:50px">
        <div class="card card-body">
            <h2>Checkout</h2>
            <div class="row">
              <div class="col-md-6">
                <h4>Informasi Pengiriman</h4>
                <form action="{{url('checkout-data')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="name">Nama:</label>
                    <input type="text" class="form-control" name="name" required value="{{auth()->user()->name}}" id="name" placeholder="Masukkan nama">
                  </div>
                  <div class="form-group">
                    <label for="email">No telepon:</label>
                    <input type="number" class="form-control" name="no_telepon" required id="email" value="{{auth()->user()->no_telepon ?? ''}}" placeholder="Masukkan No telepon">
                  </div>
                  <div class="form-group">
                    <label for="address">Alamat:</label>
                    <textarea class="form-control" name="alamat" required id="address" placeholder="Masukkan alamat">{{auth()->user()->alamat ?? ''}}</textarea>
                  </div>
                  <div class="form-group">
                    <label for="address">Catatan:</label>
                    <textarea class="form-control" name="catatan"  id="address" placeholder="Masukkan catatan"></textarea>
                  </div>
                  
              </div>
              <div class="col-md-6">
                <h4>Ringkasan Pesanan</h4>
                <table class="table">
                  <thead>
                    <tr>
                      <th>Produk</th>
                      <th>Jumlah</th>
                      <th>Harga</th>
                      <th>Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php
                    $total = 0;
                    @endphp
                    @foreach ($data as $value)                
                    @php
                        $subtotal = $value->total * $value->quantity;
                        $total += $subtotal;
                        if ($value->quantity > 1) {
                            $total -= 5000;
                        }
                        @endphp
                    <tr>
                        <td>{{$value->product->nama}}</td>
                        <td>{{$value->quantity}}</td>
                        <td>@currency($value->total)</td>
                        <td>@currency($subtotal)</td>
                    </tr>    
                            
                    @endforeach
                    @php
                        $total += (count($data) > 1) ? 0 : 5000;
                    @endphp
                    <input type="hidden" name="total" value="{{$total}}">
                    <img class="img-preview mt-3 mb-3"style="width:200px">
                          <div class="row">
                                <label for="inputText" class="col-sm-6 col-form-labe">Foto Transaksi*</label>
                                <div class="col-sm-12">
                                  <input  required name="foto_transaksi[]" type="file" onchange="previewImage()" id="gambar" class="form-control">
                                </div>
                                  <span class="col-sm-12 mt-2"><p>Silahkan Kirim Jumlah Uang @currency($total) <br> Ke Rekening: <b style="color: rgba(7, 83, 116, 0.998)">0823-8067-332-1890 (Admin)</b> Untuk Melanjutkan Proses</p></span>
                          </div>  
    
                  </tbody>
                  <tfoot>
                    @if (count($data) > 1) 
                      <tr>
                        <td colspan="3">Biaya Ongkir:</td>
                        <td>Gratis</td>
                      </tr> 
                      @else
                      <tr>
                        <td colspan="3">Biaya Ongkir:</td>
                        <td>Rp. 5.000</td>
                      </tr> 
                    @endif
              
                    <tr>
                      <td colspan="3">Total:</td>
                      <td>@currency($total)</td>
                    </tr>                
                  </tfoot>
                </table>
                @php
                  
                $cekdatacart = \App\Models\Cart::where('user_id', auth()->user()->id)->get();
                @endphp
    
                @if ($cekdatacart->isEmpty()) 
                  <span class="btn btn-primary btn-block">Silahkan Tambahkan Data Ke Keranjang Dahulu</span>              
    
                @else 
                <button type="submit" class="btn btn-primary btn-block">Check Out</button>              
    
                @endif
    
            </form>
              </div>
            </div>
          </div>
    
    </div>
    <script>
      function previewImage() {
      
      const gambar = document.querySelector('#gambar');
      const imgpreview = document.querySelector('.img-preview');
    
      imgpreview.style.display = 'block';
    
      const oFReader = new FileReader();
      oFReader.readAsDataURL(gambar.files[0]);
    
      oFReader.onload = function(oFREvent){
        imgpreview.src = oFREvent.target.result;
      }
    }
    </script>
</div>
@endsection