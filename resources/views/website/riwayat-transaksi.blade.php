@extends('template.website.dashboard')
@section('content_website')
<section class="bg-success py-2" style="height: 400px">
    <div class="container">
        <div class="row align-items-center py-2">
            <div class="col-md-8 text-white">
                <h1>Riwayat Transaksi</h1>
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
    
            <h4 class="mt-1">Riwayat Transaksi</h4>
            <table class="table mt-4">
              <thead>
                <tr>
                  <th scope="col">No.</th>
                  <th scope="col">Tanggal</th>
                  <th scope="col">Foto Transfer</th>
                  <th scope="col">Proses</th>
                  <th scope="col">Total</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $value)
                    
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$value->created_at}}</td>
                    <td><img style="width: 50px;" src="{{ asset('storage/'. $value->foto_transaksi) }}" alt=""></td>
                        @if ($value->proses == 0)                                              
                        <td><span class="btn btn-primary mb-3 text-white">Menunggu konfirmasi</span></td>
                        @else
                         <td><span class="btn btn-info mb-3 text-white">Sudah Di Konfirmasi</span></td>                                       
                        @endif                             
                      
                    <td>@currency($value->total)</td>
                    <td>
                        <a href="{{url('riwayat-transaksi/'.$value->created_at)}}" class="btn btn-primary">Detail</a>
                    </td>
                </tr>
                @endforeach
               
              </tbody>
            </table>
    
        </div>
    </div>
</div>
@endsection