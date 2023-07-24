@extends('template.website.dashboard')
@section('content_website')
<section class="bg-success py-2" style="height: 400px">
    <div class="container">
        <div class="row align-items-center py-2">
            <div class="col-md-8 text-white">
                <h1>Login</h1>
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
    @if(session()->has('LoginError'))
  <div class="alert alert-danger alert-dismissible fade show mt-2" role="alert">
      <i class="bi bi-check-circle me-1"></i>
              {{ session('LoginError') }}
  </div>
@endif 
@if(session()->has('berhasil_registrasi'))
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
    <i class="bi bi-check-circle me-1"></i>
            {{ session('berhasil_registrasi') }}
</div>
@endif 
    <div class="card">

    <div class="row py-5">
        <form class="col-md-6 m-auto" method="post" role="form" action="{{route('login')}}">
            @csrf
            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control mt-1" id="email" name="email" placeholder="Silahkan Masukan Email Anda">
            </div>         
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="password" class="form-control mt-1" id="password" name="password" placeholder="Silahkan Masukan Password Anda">
            </div>           
            <div class="row">
                <div class="col text-center mt-2">
                    <button type="submit" class="btn btn-success btn-lg px-3">Login</button>
                    <p class="mt-1">Belum Registrasi? <a href="{{url('register')}}">Silahkan Registrasi</a></p>
                </div>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection