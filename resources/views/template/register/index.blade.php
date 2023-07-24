@extends('template.website.dashboard')
@section('content_website')
<section class="bg-success py-2" style="height: 400px">
    <div class="container">
        <div class="row align-items-center py-2">
            <div class="col-md-8 text-white">
                <h1>Register</h1>
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
    <div class="card">

    <div class="row py-5">
        <form class="col-md-6 m-auto" method="post" role="form" action="{{url('register')}}">
            @csrf
            <div class="mb-3">
                <label for="name">Nama:</label>
                <input type="text" class="form-control mt-1 @error('name')is-invalid @enderror" required id="name" name="name" placeholder="Silahkan Masukan Nama Anda">
                @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>  
                @enderror
            </div>  
            <div class="mb-3">
                <label for="email">Email:</label>
                <input type="email" class="form-control mt-1 @error('email')is-invalid @enderror" required id="email" name="email" placeholder="Silahkan Masukan Email Anda">
                @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>  
                @enderror
            </div>         
            <div class="mb-3">
                <label for="password">Password:</label>
                <input type="password" class="form-control mt-1 @error('password')is-invalid @enderror" required id="password" name="password" placeholder="Silahkan Masukan Password Anda">
                @error('password')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>  
                @enderror
            </div>           
            <div class="row">
                <div class="col text-center mt-2">
                    <button type="submit" class="btn btn-success btn-lg px-3">Registrasi</button>
                    <p class="mt-1">Sudah Punya Akun? <a href="{{url('login')}}">Login Sekarang</a></p>
                </div>
            </div>
        </form>
    </div>
    </div>
</div>
@endsection