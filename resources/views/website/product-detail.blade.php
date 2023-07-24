@extends('template.website.dashboard')
@section('css_website')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
@endsection
@section('content_website')
<section class="bg-success py-2" style="height: 400px">
    <div class="container">
        <div class="row align-items-center py-2">
            <div class="col-md-8 text-white">
                <h1>Product Detail</h1>
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
<section class="bg-light">
    <div class="container pb-5">
        <div class="row">
            @if(session()->has('berhasil'))
                <div class="alert alert-success alert-dismissible " role="alert" style="margin-top: 30px">
                <strong>{{session('berhasil')}}</strong>
                </div>
            @endif
            <div class="col-lg-5 mt-5">
                {{-- <div class="card mb-3">
                    <img class="card-img img-fluid" src="{{ asset('storage/'. $data->gambar) }}" alt="Card image cap 1" id="product-detail">
                </div>     --}}
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      @if ($data->gambar2)                          
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      @endif
                      @if ($data->gambar3)                                                
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                      @endif
                      @if ($data->gambar4)                          
                      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                      @endif
                      @if ($data->gambar5)                          
                      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                      @endif

                      <!-- Tambahkan lebih banyak li sesuai jumlah gambar yang ingin ditampilkan -->
                    </ol>
                    <div class="carousel-inner">
                      <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('storage/'. $data->gambar) }}" alt="Slide 1">
                      </div>
                      @if ($data->gambar2)                          
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('storage/'. $data->gambar2) }}" alt="Slide 2">
                      </div>
                      @endif
                      @if ($data->gambar3)                          
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('storage/'. $data->gambar3) }}" alt="Slide 3">
                      </div>
                      @endif
                      @if ($data->gambar4)                          
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('storage/'. $data->gambar4) }}" alt="Slide 3">
                      </div>
                      @endif
                      @if ($data->gambar5)                          
                      <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('storage/'. $data->gambar5) }}" alt="Slide 3">
                      </div>
                      @endif
                      <!-- Tambahkan lebih banyak div.carousel-item sesuai jumlah gambar yang ingin ditampilkan -->
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                </div>
                  
                <div class="row mt-3">                        
                    <div class="col-1 align-self-center">
                        <a href="#multi-item-example" role="button" data-bs-slide="prev">
                            <i class="text-dark fas fa-chevron-left"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                    </div>
                    <div id="multi-item-example" class="col-10 carousel slide carousel-multi-item" data-bs-ride="carousel">
                        <div class="carousel-inner product-links-wap" role="listbox">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="{{ asset('storage/'. $data->gambar) }}" alt="Product Image 2">
                                        </a>
                                    </div>
                                    @if ($data->gambar2)                                        
                                    <div class="col-4">
                                            <a href="#">
                                                <img class="card-img img-fluid" src="{{ asset('storage/'. $data->gambar2) }}" alt="Product Image 2">
                                            </a>
                                    </div>
                                    @endif
                                    @if ($data->gambar3)   
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="{{ asset('storage/'. $data->gambar3) }}" alt="Product Image 3">
                                        </a>
                                    </div>
                                    @endif                                   
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    @if ($data->gambar4)   
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="{{ asset('storage/'. $data->gambar4) }}" alt="Product Image 4">
                                        </a>
                                    </div>
                                    @endif
                                    @if ($data->gambar5)   
                                    <div class="col-4">
                                        <a href="#">
                                            <img class="card-img img-fluid" src="{{ asset('storage/'. $data->gambar5) }}" alt="Product Image 5">
                                        </a>
                                    </div>      
                                    @endif                           
                                </div>
                            </div>

                          
                        </div>
                    </div>
                 
                    <div class="col-1 align-self-center">
                        <a href="#multi-item-example" role="button" data-bs-slide="next">
                            <i class="text-dark fas fa-chevron-right"></i>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h1 class="h2">{{$data->nama}}</h1>
                        {{-- <p class="h3 py-2">@currency($data->harga)</p> --}}
                        <p class="py-2">
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                            <i class="fa fa-star text-warning"></i>
                        </p>                        
                        <h6>Category:</h6>
                        <p>{{$data->category->nama}}</p>
                        <h6>Description:</h6>
                        <p>{!!$data->deskripsi!!}</p>
                        <form action="{{url('cart')}}" method="post">
                            @csrf
                            <input type="hidden" name="product_id" value="{{$data->id}}">
                            <div class="row">                                
                                <div class="col-auto">

                                    @if ($data->category->nama == 'Buket Uang')          
                                        <div class="form-group pb-3">
                                        <label for="topping" class="pb-2">Custom Lembar:</label>
                                        <select class="form-control"  name="custom_lembar_id" required id="custom_lembar_id">
                                            <option disabled selected value="" style="text-align: center">-- Silahkan pilih Custom Lembar --</option>  
                                            @foreach ($customLembar as $value)
                                                <option value="{{$value->id}}" data-harga="{{$value->harga}}">{{$value->nama}}</option>
                                            @endforeach                                        
                                        </select>
                                        </div>
                                    @endif
                                    @if ($data->category->nama == 'Buket Snack')          
                                        <div class="form-group pb-3">
                                        <label for="size_id" class="pb-2">Custom Ukuran:</label>
                                        <select class="form-control"  name="size_id" required  id="size_id">
                                            <option disabled selected value="" style="text-align: center">-- Silahkan pilih Ukuran --</option>  
                                            @foreach ($size as $value)
                                            @if ($value->nama === 'Premium')
                                                @continue
                                            @endif
                                            <option value="{{ $value->id }}">{{ $value->nama }}</option>
                                        @endforeach                                 
                                        </select>
                                        </div>
                                    @elseif  ($data->category->nama == 'Buket Bunga')  
                                        <div class="form-group pb-3">
                                            <label for="size_id" class="pb-2">Custom Ukuran:</label>
                                            <select class="form-control"  name="size_id" required  id="size_id">
                                                <option disabled selected value="" style="text-align: center">-- Silahkan pilih Ukuran --</option>  
                                                @foreach ($size as $value)                                             
                                                <option value="{{ $value->id }}">{{ $value->nama }}</option>
                                                @endforeach                                 
                                            </select>
                                        </div>
                                    @endif                                                                       
                                    <input type="hidden" name="total" id="harga">
                                    Total Harga: Rp. <span id="hargaSpan">{{$data->harga}}</span>

                                    <ul class="list-inline pb-3 mt-2">
                                        <li class="list-inline-item text-right">
                                            Quantity:
                                            <input type="hidden" name="quantity" id="product-quanity" value="1">
                                        </li>
                                        <li class="list-inline-item"><span class="btn btn-success" id="btn-minus">-</span></li>
                                        <li class="list-inline-item"><span style="padding: 10px" class="badge bg-secondary" id="var-value">1</span></li>
                                        <li class="list-inline-item"><span class="btn btn-success" id="btn-plus">+</span></li>
                                    </ul>
                                    <ul class="list-inline">      
                                        <li class="list-inline-item text-right">Kartu Ucapan:                               
                                    </ul>
                                    <ul class="list-inline pb-3">
                                        <li class="list-inline-item"><textarea class="form-control" required name="kartu_ucapan" cols="40" rows="4" placeholder="Silahkan Isi Kartu Ucapan Anda Beserta Warnanya"></textarea></li>                                      
                                    </ul>

                                </div>
                            </div>
                            <div class="row pb-6">                              
                                <div class="col d-grid">
                                    <button type="submit" class="btn btn-success btn-lg" name="submit" value="addtocard">Add To Cart</button>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Close Content -->

<!-- Start Article -->
<div class="container py-5">
    <div class="row">
        <div class="row text-left p-2 pb-3">
            <h4>Related Products</h4>
        </div>
        @foreach ($productRandom as $value)        
        <div class="col-md-4">
            <div class="card mb-4 product-wap rounded-0" style="height: 480px">
                <div class="card rounded-0">
                    <img class="card-img rounded-0 img-fluid" height="200px" src="{{ asset('storage/'. $value->gambar) }}">
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
<script>
    var hargaAwal = parseFloat("{{ $data->harga }}"); 

    var hargaInput = document.getElementById('harga');
    hargaInput.value = hargaAwal.toFixed(0);
    hargaSpan.textContent = hargaAwal.toFixed(0);

    document.getElementById('size_id').addEventListener('change', function() {
        var sizeId = this.value;

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
            if (xhr.readyState === XMLHttpRequest.DONE) {
                if (xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    var hargaBaru = hargaAwal + parseFloat(response.harga); 
                    hargaInput.value = hargaBaru.toFixed(0); 
                    hargaSpan.textContent = hargaBaru.toFixed(0); 
                } else {
                    console.error(xhr.status);
                }
            }
        };

        xhr.open('GET', '/get-harga/' + sizeId); 
        xhr.send();
    });
    
</script>
<script>
    var selectElem = document.getElementById('custom_lembar_id');
    var hargaInput = document.getElementById('harga');
    var hargaSpan = document.getElementById('hargaSpan');
    
    selectElem.addEventListener('change', function() {
        var selectedOption = selectElem.options[selectElem.selectedIndex];
        
        if (selectedOption.getAttribute('data-harga')) {
            var harga = parseInt(selectedOption.getAttribute('data-harga'));
            var hargaDitambah = harga + {{$data->harga}}; 
            
            hargaInput.value = hargaDitambah;
            hargaSpan.textContent =  + hargaDitambah;
          
        } else {
            hargaInput.value = '';
            hargaSpan.textContent = '';    
        }
    });
</script>
@endsection