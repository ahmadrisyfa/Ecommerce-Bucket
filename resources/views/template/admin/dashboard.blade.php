
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('website')}}/assets/img/favicon.ico">

  <title>Florist Singkawang</title>

    @yield('css_admin')
    <!-- Bootstrap -->
    <link href="{{asset('admin')}}/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin')}}/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin')}}/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('admin')}}/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="{{asset('admin')}}/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('admin')}}/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('admin')}}/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('admin')}}/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              @if ($data = \App\Models\NamaDanLogo::first())  
              @php
                $data = \App\Models\NamaDanLogo::first()->get();
            @endphp
             @foreach ($data as $value)   
                <a href="{{url('admin/dashboard')}}" class="site_title"><img src="{{ asset('storage/'. $value->gambar) }}" width="40px" alt=""><span style="text-transform:capitalize">{{$value->nama}}</span></a>
              @endforeach
              @else
                <a href="{{url('admin/dashboard')}}" class="site_title"><i class="fa fa-paw"></i> <span>Contoh Website</span></a>
              @endif
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="{{ auth()->user()->picture }}" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2 style="text-transform:capitalize">{{auth()->user()->name}}</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Detail Admin</h3>
                
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('admin/dashboard')}}">Dashboard</a></li>                
                    </ul>
                  </li>
                  <li><a><i class="fa fa-certificate"></i> Category <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                    
                      <li><a href="{{url('admin/category/create')}}">Create Category</a></li>
                      <li><a href="{{url('admin/category')}}">Detail Category</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-archive"></i> Product <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                    
                      <li><a href="{{url('admin/product/create')}}">Create Product</a></li>
                      <li><a href="{{url('admin/product')}}">Detail Product</a></li>
                    </ul>
                  </li>  
                  <li><a><i class="fa fa-arrows-h"></i> Size <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                    
                      <li><a href="{{url('admin/size/create')}}">Create Size</a></li>
                      <li><a href="{{url('admin/size')}}">Detail Size</a></li>
                    </ul>
                  </li>  
                  <li><a><i class="fa fa-newspaper-o"></i> Custom Lembar <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                    
                      <li><a href="{{url('admin/custom_lembar/create')}}">Create Custom Lembar</a></li>
                      <li><a href="{{url('admin/custom_lembar')}}">Detail Custom Lembar</a></li>
                    </ul>
                  </li>  
                  <li><a><i class="fa fa-calculator"></i> Detail transaksi <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                    
                      <li><a href="{{url('admin/transaksi')}}">Detail Transaksi</a></li>
                      <li><a href="{{url('admin/cetak/transaksi')}}">Cetak Transaksi</a></li>
                    </ul>
                  </li> 
                  <li><a><i class="fa fa-user"></i> Custom Admin Dan User <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                    
                      <li><a href="{{url('admin/admin_user/create')}}">Create Custom Admin Dan User</a></li>
                      <li><a href="{{url('admin/admin_user')}}">Detail Custom Admin Dan User</a></li>
                    </ul>
                  </li>  
                  <li><a><i class="fa fa-sliders"></i> Slider <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                    
                      <li><a href="{{url('admin/slider/create')}}">Create Slider</a></li>
                      <li><a href="{{url('admin/slider')}}">Detail Slider</a></li>
                    </ul>
                  </li>     
                  <li><a><i class="fa fa-support"></i> Support <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">                    
                      <li><a href="{{url('admin/support/create')}}">Create Support</a></li>
                      <li><a href="{{url('admin/support')}}">Detail Support</a></li>
                    </ul>
                  </li>              
                </ul>                
              </div>  
              <div class="menu_section">
                <h3>Detail Website</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-cogs"></i> Detail Website<span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="{{url('admin/nama_dan_logo')}}">Nama Dan Logo</a></li>                    
                      <li><a href="{{url('admin/contact_website')}}">Alamat Dan Contact</a></li>                    
                    </ul>
                  </li>
                </ul>
              </div>    
            </div>
            <!-- /sidebar menu -->

          
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>
              <span style="float: left">
                @include('template.admin.waktu')
              </span>
              <nav class="nav navbar-nav">
              <ul class=" navbar-right">
                <li class="nav-item dropdown open" style="padding-left: 15px;">
                  <a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
                    <img src="{{ auth()->user()->picture }}" alt=""> <span style="text-transform: capitalize">{{auth()->user()->name}}</span>
                  </a>                  
                  <div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">                    
                  <a class="dropdown-item"  href="{{url('/')}}">Website</a>
                  <form action="{{url('logout')}}" method="POST">
                    @csrf
                    <button class="dropdown-item"type="submit"><i class="fa fa-sign-out pull-right"></i> Log Out</button>
                  </form>
                  </div>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
  
          <!-- top tiles -->
         
          
        
          <div class="right_col" role="main">
            <div class="row">
              <div class="col-md-12 col-sm-12 ">
            @yield('content_admin')
              </div>  
            </div>
        </div>

          <!-- /top tiles -->

         

        


       
        <!-- /page content -->

        <!-- footer content -->
        <footer>

          <div class="pull-right">
            @if ($data = \App\Models\NamaDanLogo::first())  
            @php
              $data = \App\Models\NamaDanLogo::first()->get();
            @endphp
           @foreach ($data as $value)   
           Copyright © {{date('Y')}} {{$value->nama}} | Designed by {{$value->nama}}         
           @endforeach
           @else
           Copyright © {{date('Y')}} Contoh Website | Designed by Contoh Website          
            @endif
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    <!-- jQuery -->
    <script src="{{asset('admin')}}/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{asset('admin')}}/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="{{asset('admin')}}/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{asset('admin')}}/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="{{asset('admin')}}/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="{{asset('admin')}}/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('admin')}}/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="{{asset('admin')}}/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="{{asset('admin')}}/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="{{asset('admin')}}/vendors/Flot/jquery.flot.js"></script>
    <script src="{{asset('admin')}}/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="{{asset('admin')}}/vendors/Flot/jquery.flot.time.js"></script>
    <script src="{{asset('admin')}}/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="{{asset('admin')}}/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="{{asset('admin')}}/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="{{asset('admin')}}/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="{{asset('admin')}}/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="{{asset('admin')}}/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="{{asset('admin')}}/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="{{asset('admin')}}/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="{{asset('admin')}}/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('admin')}}/vendors/moment/min/moment.min.js"></script>
    <script src="{{asset('admin')}}/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('admin')}}/build/js/custom.min.js"></script>
@yield('script_admin')
	
  </body>
</html>
