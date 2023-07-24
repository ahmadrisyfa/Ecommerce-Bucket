@extends('template.website.dashboard')
@section('content_website')
<section class="bg-success py-2" style="height: 400px">
    <div class="container">
        <div class="row align-items-center py-2">
            <div class="col-md-8 text-white">
                <h1>Riwayat Transaksi Detail</h1>
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
    <div style="margin-top:50px;margin-bottom:50px">
        <div class="card card-body">
    
            @foreach ($data as $value)
            <div class="row mb-3">
                    
                <div class="col-md-2">
                    <img style="width: 150px;" src="{{ asset('storage/'. $value->product->gambar) }}" alt="" class="img-fluid">
                </div>
                <div class="col-md-10">
                    <p>Nama: {{$value->product->nama}}</p>
                    @if ($value->size)
                    <p>Size: {{$value->size->nama}}</p>
                    @endif
                    <p>Jumlah: {{$value->quantity}}</p>
                    @if ($value->customlembar)
                    <p>Lembar: {{$value->customlembar->nama}}</p>
                    @endif              
                </div>
              </div>        
              @endforeach
              <div class="col-md-12 text-center">
                <h4>Total Yang Di Transfer: @currency($value->total)</h4>
                @if($value->proses == 0)
                <h4>Proses: <span class="btn btn-primary mb-3 text-white">Menunggu konfirmasi</span></h4>
                @else
                <h4>Proses: <span class="btn btn-info mb-3 text-white">Sudah Di konfirmasi</span></h4>
                @endif
              </div>
              <div class="col-sm-6">
                <a href="{{url('riwayat-transaksi')}}" class="btn btn-primary">Kembali</a>
              </div>
            </div>
    </div>
</div>
@endsection