<!DOCTYPE html>
<html lang="en">

<head>
    <title>Florist Singkawang</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="{{asset('website')}}/assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('website')}}/assets/img/favicon.ico">

    <link rel="stylesheet" href="{{asset('website')}}/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/templatemo.css">
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/custom.css">
@yield('css_website')
    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="{{asset('website')}}/assets/css/fontawesome.min.css">
</head>

<body>
    


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h6 align-self-center" href="{{url('/')}}">
                @if ($namaDanLogo = \App\Models\NamaDanLogo::first())  
                @php
                  $namaDanLogo = \App\Models\NamaDanLogo::first()->get();
                @endphp
               @foreach ($namaDanLogo as $value)   
               <img src="{{ asset('storage/'. $value->gambar) }}" width="40px" alt="">
               {{$value->nama}}
                @endforeach
                @else
                  Zay Shop
                @endif
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/')}}">Home</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Category
                            </a>
                            @if ($Category = \App\Models\Category::get())  
                            @php
                              $Category = \App\Models\Category::get();
                            @endphp
                           <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                           @foreach ($Category as $value)                              
                               <li><a class="dropdown-item" href="{{url('category/'.$value->id.'/detail')}}">{{$value->nama}}</a></li>  
                               <div class="dropdown-divider"></div>                               
                            @endforeach
                            </ul>
                            @endif
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Support
                            </a>
                            @if ($support = \App\Models\support::get())  
                            @php
                              $support = \App\Models\support::get();
                            @endphp
                           <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                           @foreach ($support as $value)                              
                               <li><a class="dropdown-item" href="{{url('support/'.$value->id.'/detail')}}">{{Illuminate\Support\Str::of($value->judul)->words(10)}}</a></li>
                               <div class="dropdown-divider"></div>                               
                            @endforeach
                            </ul>
                            @endif
                        </li>
                        <li class="nav-item dropdown">
                            @auth
                            <a style="text-transform: capitalize" class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fa fa-user"></i>  {{auth()->user()->name}}
                            </a>
                             @else
                                <a class="nav-link dropdown-toggle" href="#" id="aboutDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  <i class="fa fa-user"></i> Akun Saya
                                  </a>
                            @endauth
                            <ul class="dropdown-menu" aria-labelledby="aboutDropdown">
                                @auth
                                <li><a class="dropdown-item" href="#">Profile</a></li>  
                                <div class="dropdown-divider"></div>                               
                                <li><a class="dropdown-item" href="{{url('riwayat-transaksi')}}">Riwayat Transaksi</a></li>    
                                <div class="dropdown-divider"></div>                               

                                @if (auth()->user()->admin == 1)
                                <li><a class="dropdown-item" href="{{url('admin/dashboard')}}">Website Admin</a></li>    
                                <div class="dropdown-divider"></div>                               
                                @endif                              
                                <form action="{{url('logout')}}" method="Post">
                                    @csrf
                                    <li><button type="submit" class="dropdown-item">Log Out</button></li>   
                                </form>                                    
                                @else                                
                                <li><a class="dropdown-item" href="{{url('login')}}">Login</a></li>                               
                                @endauth
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">                                        
                    <a class="nav-icon position-relative text-decoration-none" href="{{url('cart')}}">
                        <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                        @auth                            
                            @php
                            $hitungcart = \App\Models\Cart::where('user_id',auth()->user()->id)->count();
                            @endphp
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">{{$hitungcart}}</span>
                        @else
                        <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">0</span>
                        @endauth
                
                    </a>                   
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->

   



    @yield('content_website')


    <!-- Start Footer -->
    <footer class="bg-dark" id="tempaltemo_footer">
        <div class="container">
            <div class="row">

                <div class="col-md-4 pt-5">
                    @if ($namaDanLogo = \App\Models\NamaDanLogo::first())  
                    @php
                      $namaDanLogo = \App\Models\NamaDanLogo::first()->get();
                    @endphp
                   @foreach ($namaDanLogo as $value)                      
                   <h2 class="h2 text-success border-bottom pb-3 border-light logo"><img src="{{ asset('storage/'. $value->gambar) }}" width="40px" alt="">{{$value->nama}}</h2>
                    @endforeach
                    @else
                      <h2 class="h2 text-success border-bottom pb-3 border-light logo">Zay Shop</h2>
                    @endif

                    @if ($ContactWebsite = \App\Models\ContactWebsite::first())  
                    @php
                      $ContactWebsite = \App\Models\ContactWebsite::first()->get();
                    @endphp
                   @foreach ($ContactWebsite as $value)                      
                   <ul class="list-unstyled text-light footer-link-list">
                    <li>
                        <i class="fas fa-map-marker-alt fa-fw"></i>
                       {{$value->alamat}}
                    </li>
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none">{{$value->no_telp1}}</a>
                    </li>
                    @if ($value->no_telp2)
                    <li>
                        <i class="fa fa-phone fa-fw"></i>
                        <a class="text-decoration-none">{{$value->no_telp2}}</a>
                    </li>
                    @endif
                    <li>
                        <i class="fa fa-envelope fa-fw"></i>
                        <a class="text-decoration-none">{{$value->email}}</a>
                    </li>
                </ul>
                    @endforeach
                    @else
                      <ul class="list-unstyled text-light footer-link-list">
                          <li>
                              <i class="fas fa-map-marker-alt fa-fw"></i>
                              123 Consectetur at ligula 10660
                          </li>
                          <li>
                              <i class="fa fa-phone fa-fw"></i>
                              <a class="text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                          </li>
                          <li>
                              <i class="fa fa-envelope fa-fw"></i>
                              <a class="text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                          </li>
                      </ul>
                    @endif

                </div>

                @if ($Product = \App\Models\Product::get())  
                @php
                  $Product = \App\Models\Product::get()->take(7);
                @endphp
               <div class="col-md-4 pt-5">
                   <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                   <ul class="list-unstyled text-light footer-link-list">
                    @foreach ($Product as $value)                      
                    <li><a class="text-decoration-none" href="{{url('product/'.$value->id.'/detail')}}">{{$value->nama}}</a></li>                  
                    @endforeach
                </ul>
            </div>
                @else
                  <div class="col-md-4 pt-5">
                      <h2 class="h2 text-light border-bottom pb-3 border-light">Products</h2>
                      <ul class="list-unstyled text-light footer-link-list">
                          <li><a class="text-decoration-none" href="#">Luxury</a></li>
                          <li><a class="text-decoration-none" href="#">Sport Wear</a></li>
                          <li><a class="text-decoration-none" href="#">Men's Shoes</a></li>
                          <li><a class="text-decoration-none" href="#">Women's Shoes</a></li>
                          <li><a class="text-decoration-none" href="#">Popular Dress</a></li>
                          <li><a class="text-decoration-none" href="#">Gym Accessories</a></li>
                          <li><a class="text-decoration-none" href="#">Sport Shoes</a></li>
                      </ul>
                  </div>
                @endif
                
                <div class="col-md-4 pt-5">
                    <h2 class="h2 text-light border-bottom pb-3 border-light">Further Info</h2>
                    <ul class="list-unstyled text-light footer-link-list">
                        <li><a class="text-decoration-none" href="#">Home</a></li>
                        <li><a class="text-decoration-none" href="#">About Us</a></li>
                        <li><a class="text-decoration-none" href="#">Shop Locations</a></li>
                        <li><a class="text-decoration-none" href="#">FAQs</a></li>
                        <li><a class="text-decoration-none" href="#">Contact</a></li>
                    </ul>
                </div>

            </div>

            <div class="row text-light mb-4">
                <div class="col-12 mb-3">
                    <div class="w-100 my-3 border-top border-light"></div>
                </div>
                <div class="col-auto me-auto">
                    <ul class="list-inline text-left footer-icons">
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="http://facebook.com/"><i class="fab fa-facebook-f fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.instagram.com/"><i class="fab fa-instagram fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://twitter.com/"><i class="fab fa-twitter fa-lg fa-fw"></i></a>
                        </li>
                        <li class="list-inline-item border border-light rounded-circle text-center">
                            <a class="text-light text-decoration-none" target="_blank" href="https://www.linkedin.com/"><i class="fab fa-linkedin fa-lg fa-fw"></i></a>
                        </li>
                    </ul>
                </div>
                <div class="col-auto">
                    <label class="sr-only" for="subscribeEmail">Email address</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control bg-dark border-light" id="subscribeEmail" placeholder="Email address">
                        <div class="input-group-text btn-success text-light">Subscribe</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="w-100 bg-black py-3">
            <div class="container">
                <div class="row pt-2">
                    <div class="col-12">
                        @if ($namaDanLogo = \App\Models\NamaDanLogo::first())  
                        @php
                          $namaDanLogo = \App\Models\NamaDanLogo::first()->get();
                        @endphp
                       @foreach ($namaDanLogo as $value)                      
                       <p class="text-left text-light">
                        Copyright &copy; {{date('Y')}} {{$value->nama}}
                        | Designed by {{$value->nama}}
                    </p>
                        @endforeach
                        @else
                          <p class="text-left text-light">
                              Copyright &copy; 2021 Company Name 
                              | Designed by Zay Shop
                          </p>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <!-- Start Script -->
    <script src="{{asset('website')}}/assets/js/jquery-1.11.0.min.js"></script>
    <script src="{{asset('website')}}/assets/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="{{asset('website')}}/assets/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('website')}}/assets/js/templatemo.js"></script>
    <script src="{{asset('website')}}/assets/js/custom.js"></script>
    <!-- End Script -->
</body>

</html>