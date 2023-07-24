@extends('template.admin.dashboard')
@section('content_admin')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2 >Detail Data Product</h2>              
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px" for="first-name">Nama :</label>
                    <div class="col-md-6 col-sm-6 ">
                       <span class="font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px">{{$data->nama}}</span>
                    </div>
                </div>    
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px" for="first-name">Category :</label>
                    <div class="col-md-6 col-sm-6 ">
                       <span class="font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px">{{$data->category->nama}}</span>
                    </div>
                </div> 
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px" for="first-name">Gambar 1:</label>
                    <div class="col-md-6 col-sm-6 ">
                       <span class="font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px"><img style="width: 150px;" src="{{ asset('storage/'. $data->gambar) }}" alt=""></span>
                    </div>
                </div> 
                @if ($data->gambar2)                
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px" for="first-name">Gambar 2:</label>
                    <div class="col-md-6 col-sm-6 ">
                       <span class="font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px"><img style="width: 150px;" src="{{ asset('storage/'. $data->gambar2) }}" alt=""></span>
                    </div>
                </div> 
                @endif
                @if ($data->gambar3)                
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px" for="first-name">Gambar 3:</label>
                    <div class="col-md-6 col-sm-6 ">
                       <span class="font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px"><img style="width: 150px;" src="{{ asset('storage/'. $data->gambar3) }}" alt=""></span>
                    </div>
                </div> 
                @endif
                @if ($data->gambar4)                
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px" for="first-name">Gambar 4:</label>
                    <div class="col-md-6 col-sm-6 ">
                       <span class="font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px"><img style="width: 150px;" src="{{ asset('storage/'. $data->gambar4) }}" alt=""></span>
                    </div>
                </div> 
                @endif
                @if ($data->gambar5)                
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px" for="first-name">Gambar 5:</label>
                    <div class="col-md-6 col-sm-6 ">
                       <span class="font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px"><img style="width: 150px;" src="{{ asset('storage/'. $data->gambar5) }}" alt=""></span>
                    </div>
                </div> 
                @endif

                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px" for="first-name">Harga :</label>
                    <div class="col-md-6 col-sm-6 ">
                       <span class="font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px">{{$data->harga}}</span>
                    </div>
                </div> 
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px" for="first-name">Deskripsi :</label>
                    <div class="col-md-6 col-sm-6 ">
                       <span class="font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px">{!!$data->deskripsi!!}</span>
                    </div>
                </div> 
                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <a  href="{{url('admin/product')}}" class="btn btn-primary" type="button">Kembali</a>                     
                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>
@endsection