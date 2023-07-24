@extends('template.website.dashboard')
@section('content_website')
<section class="bg-success py-2" style="height: 400px">
    <div class="container">
        <div class="row align-items-center py-2">
            <div class="col-md-8 text-white">
                <h1>Cart</h1>
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
    <div class="row">
        
        @if(session()->has('berhasil'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="bi bi-check-circle me-1"></i>
                    {{ session('berhasil') }}
        </div>
        @endif 
        <ul class="list-group">
            <li class="list-group-item">
                <div class="row">
                      <div class="col-md-2 font-weight-bold">
                        <p>Gambar</p>
                      </div>
                      <div class="col-md-2 font-weight-bold">
                          <p>Nama Produk</p>
                      </div>            
                      <div class="col-md-2 font-weight-bold">
                          <p>Harga</p>
                      </div>
                      <div class="col-md-2 font-weight-bold">
                          <p>jumlah Beli</p>
                      </div>
                      <div class="col-md-2 font-weight-bold">
                          <p>Total</p>
                      </div>
                      <div class="col-md-2 font-weight-bold">
                          <span>Action</span>
                      </div>
                      
                </div>
              </li>
    
    
                @php
                $total = 0;
                @endphp
            
            @foreach ($data as $value)    
                <li class="list-group-item">
                    <div class="row pb-2">
                        <div class="col-md-2">
                            <a href="{{url('product/'.$value->product->id.'/detail')}}" style="color:black;text-decoration:none">    <img src="{{ asset('storage/'.$value->product->gambar) }}" alt="Gambar Produk" class="img-fluid"></a>
                        </div>
                        <div class="col-md-2">
                            <a href="{{url('product/'.$value->product->id.'/detail')}}" style="color:black;text-decoration:none"> {{ $value->product->nama }}</a>
                            @if ($value->size)
                                <p>*Size:&nbsp;&nbsp; {{$value->size->nama}}</p>                            
                            @endif
                            @if ($value->customlembar)
                            <p>*Lembar:&nbsp;&nbsp;{{$value->customlembar->nama}}</p>                            
                            @endif
                        </div>
                        <div class="col-md-2">
                            <p>@currency($value->total)</p>
                        </div>
                        <div class="col-md-2">
                            <p>{{ $value->quantity }}</p>                          
                        </div>
                        <div class="col-md-2">
                            @currency($value->total * $value->quantity)
                        </div>
                        <div class="col-md-2">
                            <a href="{{ url('cart/'.$value->id.'/hapus') }}" onclick="return confirm('Apakah Anda Yakin Menghapus Data?');" style="font-weight:bold" class="btn btn-danger"><i class="fa fa-trash" style="margin-right:10px"></i>Hapus</a>
                        </div>
                        
                    </div>
                    @php
                        $harga = $value->total;
                        $jumlah = $value->quantity;
                        $subtotal = $harga * $jumlah;                                                                           
                        $total += $subtotal;
                    @endphp
                </li>
            @endforeach
            
              
            
      
        </ul>
      
          <div class="card mt-3 mb-3" style="float:right;width:400px">
            <div class="card-body" >
              <h5 class="card-title">Ringkasan Keranjang</h5>
              <p>Total Item: {{$hitungdata}}</p>
              
              <p>Total Semua: @currency($total)</p>
             
              <a href="{{url('checkout')}}" class="btn btn-success">Checkout</a>
            </div>


    </div>
</div>
</div>
@endsection