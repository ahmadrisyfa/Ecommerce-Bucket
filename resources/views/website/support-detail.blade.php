@extends('template.website.dashboard')
@section('content_website')
<section class="bg-success py-2" style="height: 400px">
    <div class="container">
        <div class="row align-items-center py-2">
            <div class="col-md-8 text-white">
                <h1>Support Detail : {{$data->judul}}</h1>
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
        <div class="col-md-8 m-auto">
            <div class="mb-3">
                <p class="font-weight-bold h2">{{$data->judul}}:</p>            
            </div>         
            <div class="mb-3">
                <p>{!!$data->deskripsi!!}</p>
            </div>

        </div>
    </div>
    </div>
</div>
@endsection