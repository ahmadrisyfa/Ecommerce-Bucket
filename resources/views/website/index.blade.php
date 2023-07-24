@extends('template.website.dashboard')
@section('content_website')

<!-- Start Banner Hero -->
<div class="container">

@if(session()->has('berhasil'))
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
    <i class="bi bi-check-circle me-1"></i>
            {{ session('berhasil') }}
</div>
@endif
</div>

<div id="template-mo-zay-hero-carousel" class="carousel slide" data-bs-ride="carousel">   
    <div class="carousel-inner">
        @foreach ($slider as $value)
            
        <div class="carousel-item  {{ $loop->first ? ' active' : '' }}">
            <div class="container">
                <div class="row p-5">
                    <div class="mx-auto col-md-8 col-lg-6 order-lg-last">
                        <img class="img-fluid" src="{{ asset('storage/'. $value->gambar) }}" alt="">
                    </div>
                    <div class="col-lg-6 mb-0 d-flex align-items-center">
                        <div class="text-align-left align-self-center">
                            <h3 class="h2">{{$value->judul}}</h3>
                            <p>
                              {{$value->deskripsi}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        
    </div>
    <a class="carousel-control-prev text-decoration-none w-auto ps-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="prev">
        <i class="fas fa-chevron-left"></i>
    </a>
    <a class="carousel-control-next text-decoration-none w-auto pe-3" href="#template-mo-zay-hero-carousel" role="button" data-bs-slide="next">
        <i class="fas fa-chevron-right"></i>
    </a>
</div>
<!-- End Banner Hero -->


<!-- Start Categories of The Month -->
{{-- <section class="container py-5">
    <div class="row text-center pt-3">
        <div class="col-lg-6 m-auto">
            <h1 class="h1">Categories of The Month</h1>
            <p>
                Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./{{asset('website')}}/assets/img/category_img_01.jpg" class="rounded-circle img-fluid border"></a>
            <h5 class="text-center mt-3 mb-3">Watches</h5>
            <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./{{asset('website')}}/assets/img/category_img_02.jpg" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Shoes</h2>
            <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
        </div>
        <div class="col-12 col-md-4 p-5 mt-3">
            <a href="#"><img src="./{{asset('website')}}/assets/img/category_img_03.jpg" class="rounded-circle img-fluid border"></a>
            <h2 class="h5 text-center mt-3 mb-3">Accessories</h2>
            <p class="text-center"><a class="btn btn-success">Go Shop</a></p>
        </div>
    </div>
</section> --}}
<!-- End Categories of The Month -->


<!-- Start Featured Product -->
<section class="">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Product yang Paling Banyak Di Minati</h1>
                {{-- <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos magnam tempore cupiditate, eligendi numquam ipsum eveniet, delectus accusantium deserunt excepturi illo labore commodi, maiores molestias atque officiis perspiciatis similique. Tenetur.
                </p> --}}
            </div>
        </div>
        <div class="row">
            @foreach ($product as $index => $value)
            @php
                $backgroundColor = '';
                if ($index == 0) {
                    $backgroundColor = '#ffd700';
                } elseif ($index == 1) {
                    $backgroundColor = '#c0c0c0';
                } elseif ($index == 2) {
                    $backgroundColor = '#cd7f32';
                }
            @endphp
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 p-3" style="background-color: {{$backgroundColor}}">
                    <a href="{{url('product/'.$value->id.'/detail')}}">
                        <img src="{{ asset('storage/'. $value->gambar) }}" height="200px" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">
                        <ul class="list-unstyled d-flex justify-content-between">
                            <li>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                                <i class="text-warning fa fa-star"></i>
                            </li>
                            {{-- <li class="text-muted text-right">@currency($value->harga)</li> --}}
                        </ul>
                        <a href="{{url('product/'.$value->id.'/detail')}}" class="h2 text-decoration-none text-dark">{{$value->nama}}</a>
                        <p class="card-text">
                            <p>{{ Str::limit(strip_tags($value->deskripsi), 80) }}</p>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        
    </div>
</section>
<section class="bg-green" style="background-color:#59ab6e">
    <div class="container py-5">
        <div class="row text-center py-3">
            <div class="col-lg-6 m-auto">
                <h1 class="h1">Daftar Kategori Yang Paling Terbaru</h1>
                {{-- <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos magnam tempore cupiditate, eligendi numquam ipsum eveniet, delectus accusantium deserunt excepturi illo labore commodi, maiores molestias atque officiis perspiciatis similique. Tenetur.
                </p> --}}
            </div>
        </div>
        <div class="row">
            @foreach ($category as $value)
                
            <div class="col-12 col-md-4 mb-4">
                <div class="card h-100 p-3" style="background-color: #2e5738">
                    <a href="{{url('category/'.$value->id.'/detail')}}">
                        <img src="{{ asset('storage/'. $value->gambar) }}" height="300px" class="card-img-top" alt="...">
                    </a>
                    <div class="card-body">                       
                        <p class="text-center text-white" style="text-transform: capitalize">{{$value->nama}}</p>
                        <p class="text-center"><a href="{{url('category/'.$value->id.'/detail')}}" class="btn btn-success">Go Shop</a></p>
                    </div>
                </div>
            </div>
            @endforeach
            
        </div>
        
    </div>
</section>
<!-- End Ca
@endsection