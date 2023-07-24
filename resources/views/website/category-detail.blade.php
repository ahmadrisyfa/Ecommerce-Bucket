@extends('template.website.dashboard')
@section('content_website')
<section class="bg-success py-2" style="height: 400px">
    <div class="container">
        <div class="row align-items-center py-2">
            <div class="col-md-8 text-white">
                <h1>Category Detail</h1>
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
        
        @foreach ($product as $value)        
        <div class="col-md-4">
            <div class="card mb-4 product-wap rounded-0">
                <div class="card rounded-0">
                    <img class="card-img rounded-0 img-fluid" src="{{ asset('storage/'. $value->gambar) }}">
                    <div class="card-img-overlay rounded-0 product-overlay d-flex align-items-center justify-content-center">
                        <ul class="list-unstyled">
                            <li><a class="btn btn-success text-white mt-2" href="{{url('product/'.$value->id.'/detail')}}"><i class="far fa-eye"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="card-body">
                    <a href="{{url('product/'.$value->id.'/detail')}}" class="h3 text-decoration-none">{{$value->nama}}</a>                
                    <ul class="list-unstyled d-flex justify-content-center mb-1">
                        <li>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-warning fa fa-star"></i>
                            <i class="text-warning fa fa-star"></i>

                          
                        </li>
                    </ul>
                    <p class="text-center mb-0">@currency($value->harga)</p>
                </div>
            </div>
        </div>
        @endforeach
             


    </div>
</div>
@endsection