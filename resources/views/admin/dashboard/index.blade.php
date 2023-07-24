@extends('template.admin.dashboard')
@section('content_admin')
<div class="x_panel">
    @if(session()->has('berhasil'))
<div class="alert alert-success alert-dismissible fade show mt-2" role="alert">
    <i class="bi bi-check-circle me-1"></i>
            {{ session('berhasil') }}
</div>
@endif
    <div class="row" style="display: inline-block;width:100%" >
        <div class="tile_count">
            <div class="col-md-4 col-sm-4  tile_stats_count">
                <span class="count_top font-weight-bold"><i class="fa fa-users" style="margin-right: 8px;"></i> Total Users</span>
                <div style="margin-bottom:6px;margin-left:10px"  class="count green"> {{$totaluser}} <i class="fa fa-users ml-4"></i></div>
                <span class="count_bottom font-weight-bold"><i class="green"><i class="fa fa-sort-asc"></i>100% </i> Total Users</span>
            </div>
            <div class="col-md-4 col-sm-4  tile_stats_count">
                <span class="count_top font-weight-bold"><i class="fa fa-user" style="margin-right: 8px;"></i> Admin</span>
                <div class="count ">{{$totaladmin}} <i class="fa fa-user" aria-hidden="true"></i></div>
                <span class="count_bottom font-weight-bold"><i class="green"><i class="fa fa-sort-asc"></i>100% </i> Total Admin</span>
            </div>
            <div class="col-md-4 col-sm-4  tile_stats_count">
                <span class="count_top font-weight-bold"><i class="fa fa-archive" style="margin-right: 8px;"></i> Product</span>
                <div class="count" style="margin-bottom:6px;"> {{$totalProduct}} <i class="fa fa-archive"></i></div>
                <span class="count_bottom font-weight-bold"><i class="green"><i class="fa fa-sort-asc"></i>100% </i> Total Product</span>
            </div>             
            <div class="col-md-4 col-sm-4  tile_stats_count" >
                <span class="count_top font-weight-bold"><i class="fa fa-certificate" style="margin-right: 8px;"></i> Category</span>
                <div class="count ">{{$totalCategory}} <i class="fa fa-certificate" aria-hidden="true"></i></div>
                <span class="count_bottom font-weight-bold"><i class="green"><i class="fa fa-sort-asc"></i>100% </i> Total Category</span>
            </div>
            <div class="col-md-4 col-sm-4  tile_stats_count">
                <span class="count_top font-weight-bold"><i class="fa fa-automobile" style="margin-right: 8px;"></i> Product Terjual</span>
                <div class="count" style="margin-bottom:6px;"> {{$totalterjual}} <i class="fa fa-automobile"></i></div>
                <span class="count_bottom font-weight-bold"><i class="green"><i class="fa fa-sort-asc"></i>100% </i> Total Product Terjual</span>
            </div>        
            <div class="col-md-4 col-sm-4  tile_stats_count">
                <input  type="file" name="file" id="changeAuthorPictureFile" class="d-none" onchange="this.dispatchEvent(new InputEvent('input'))">
                <a href="#" class="btn btn-info mt-2"onclick="event.preventDefault();document.getElementById('changeAuthorPictureFile').click();">
                <i style="margin-right: 3px" class="fa fa-image"></i> <b>Ganti foto Profil</b> 
                </a>
            </div>                  
        </div>    
    </div>
</div>

@endsection
@section('css_admin')
    <link rel="stylesheet" href="{{ asset('IjaboCropTool/ijaboCropTool.min.css') }}">
@endsection
@section('script_admin')
<script src="{{ asset('IjaboCropTool/ijaboCropTool.min.js') }}"></script>

<script>

  $('#changeAuthorPictureFile').ijaboCropTool({
          preview : '',
          setRatio:1,
          allowedExtensions: ['jpg', 'jpeg','png'],
          buttonsText:['Simpan','Batal'],
          buttonsColor:['#30bf7d','#ee5155', -15],
          processUrl:'{{ route("change-profile-picture") }}',
          withCSRF:['_token','{{ csrf_token() }}'],
          onSuccess:function(message, element, status){
             alert(message);
             location.reload();
          },
          onError:function(message, element, status){
            alert(message);
          }
  });
</script>
@endsection