@extends('template.admin.dashboard')
@section('content_admin')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Edit Data Admin User <small>Silahkan Edit Data</small></h2>              
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('admin/admin_user/'.$data->id.'/edit')}}" enctype="multipart/form-data" method="Post">
                    @csrf
                    @method('PUT')
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" disabled value="{{$data->name}}"  name="nama" required="required" class="form-control ">
                        </div>
                    </div>   
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" disabled value="{{$data->email}}"  name="nama" required="required" class="form-control ">
                        </div>
                    </div>   
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Peran <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            @if ($data->admin == 1)
                                <span class="btn btn-info" style="font-weight: bold">Admin</span>
                            @else
                            <span class="btn btn-primary" style="font-weight: bold">User</span>
                                
                            @endif
                        </div>
                    </div>       
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Edit Peran <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <select name="admin" class="form-control" required>
                                {{-- <option disabled selected>-- Silahkan Pilih Peran --<option> --}}
                                <option value="1"  @if ($data->admin == 1) selected @endif>Admin</option>                               
                                <option value="0"  @if ($data->admin == 0) selected @endif>User</option>                               
                            </select>
                        </div>
                    </div>

                   
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a  href="{{url('admin/admin_user')}}" class="btn btn-primary" type="button">Cancel</a>
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
