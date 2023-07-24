@extends('template.admin.dashboard')
@section('content_admin')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Edit Data Category <small>Silahkan Edit Data</small></h2>              
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('admin/category/'.$data->id.'/edit')}}" enctype="multipart/form-data" method="Post">
                    @csrf
                    @method('PUT')
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text" value="{{$data->nama}}"  name="nama" required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                        </label>
                        <div class="col-md-6 col-sm-6">
                            <input type="hidden" class="mb-3 mt-3" name="oldImage" value="{{ old('gambar', $data->gambar)}}">
                            <img src="{{ asset('storage/'. $data->gambar) }}" class="img-preview mb-3 mt-3" style="width: 200px">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Gambar <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input   name="gambar" type="file" onchange="previewImage()" id="gambar" class="form-control">
                        </div>
                    </div>                  

                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a  href="{{url('admin/category')}}" class="btn btn-primary" type="button">Cancel</a>
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