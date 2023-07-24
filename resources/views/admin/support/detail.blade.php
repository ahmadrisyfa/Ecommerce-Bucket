@extends('template.admin.dashboard')
@section('content_admin')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Detail Data Support</h2>              
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px" for="first-name">Judul :</label>
                    <div class="col-md-6 col-sm-6 ">
                       <span class="font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px">{{$data->judul}}</span>
                    </div>
                </div>       <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px" for="first-name">Deskripsi :</label>
                    <div class="col-md-6 col-sm-6 ">
                       <span class="font-weight-bold" style="color: rgb(19, 179, 188);font-size:15px">{!!$data->deskripsi!!}</span>
                    </div>
                </div>    

                <div class="ln_solid"></div>
                <div class="item form-group">
                    <div class="col-md-6 col-sm-6 offset-md-3">
                        <a  href="{{url('admin/support')}}" class="btn btn-primary" type="button">Kembali</a>                     
                    </div>
                </div>            
            </div>
        </div>
    </div>
</div>
@endsection