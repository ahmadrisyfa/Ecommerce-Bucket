@extends('template.admin.dashboard')
@section('content_admin')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Edit Data Contact Website <small>Silahkan Edit Data</small></h2>              
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('admin/contact_website/'.$data->id.'/edit')}}" enctype="multipart/form-data" method="Post">
                    @csrf
                    @method('PUT')
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No Telepon 1 <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number" value="{{$data->no_telp1}}"  name="no_telp1" required="required" class="form-control ">
                        </div>
                    </div>                                   
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No Telepon 2 
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number"  value="{{$data->no_telp2}}" name="no_telp2" class="form-control ">
                        </div>
                    </div>   
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="email"  name="email" value="{{$data->email}}" required="required" class="form-control ">
                        </div>
                    </div>   
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Alamat <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea type="text"  name="alamat" required="required" class="form-control ">{{$data->alamat}}</textarea>
                        </div>
                    </div>   
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a  href="{{url('admin/contact_website')}}" class="btn btn-primary" type="button">Cancel</a>
                            <button class="btn btn-info" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection