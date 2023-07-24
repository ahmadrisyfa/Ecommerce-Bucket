@extends('template.admin.dashboard')
@section('content_admin')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Edit Data Size <small>Silahkan Edit Data</small></h2>              
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('admin/size/'.$data->id.'/edit')}}" enctype="multipart/form-data" method="Post">
                    @csrf
                    @method('PUT')
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text"  name="nama" value="{{$data->nama}}" required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Harga <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number"  name="harga" value="{{$data->harga}}" required="required" class="form-control ">
                        </div>
                    </div>                    

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a  href="{{url('admin/size')}}" class="btn btn-primary" type="button">Cancel</a>
                            <button class="btn btn-info" type="reset">Reset</button>
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
<script>
    function previewImage() {
    
    const gambar = document.querySelector('#gambar');
    const imgpreview = document.querySelector('.img-preview');

    imgpreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function(oFREvent){
      imgpreview.src = oFREvent.target.result;
    }
  }
</script>
@endsection