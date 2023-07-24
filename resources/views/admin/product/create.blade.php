@extends('template.admin.dashboard')
@section('content_admin')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
            <div class="x_title">
                <h2>Form Tambah Data Product <small>Silahkan Tambahkan Data</small></h2>              
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br />
                <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="{{url('admin/product/create')}}" enctype="multipart/form-data" method="Post">
                    @csrf
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="text"  name="nama" required="required" class="form-control ">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Category <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <select class="form-control" name="category_id">
                                <option disabled selected style="text-align: center">-- Silahkan Pilih category --</option>   
                                @foreach ($category as $value)                                    
                                <option value="{{$value->id}}">{{$value->nama}}</option>                         
                                @endforeach
                            </select>
                        </div>
                    </div>
                    
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                        </label>
                        <div class="col-md-6 col-sm-6">
                            <img class="img-preview1"style="width:200px">
                        </div>
                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Gambar 1<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input  required name="gambar" type="file" onchange="previewImage1()" id="gambar1" class="form-control">
                        </div>
                    </div>     
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                        </label>
                        <div class="col-md-6 col-sm-6">
                            <img class="img-preview2"style="width:200px">
                        </div>
                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Gambar 2
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input name="gambar2" type="file" onchange="previewImage2()" id="gambar2" class="form-control">
                        </div>
                    </div>                  
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                        </label>
                        <div class="col-md-6 col-sm-6">
                            <img class="img-preview3"style="width:200px">
                        </div>
                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Gambar 3
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input name="gambar3" type="file" onchange="previewImage3()" id="gambar3" class="form-control">
                        </div>
                    </div>                  
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                        </label>
                        <div class="col-md-6 col-sm-6">
                            <img class="img-preview4"style="width:200px">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Gambar 4
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input name="gambar4" type="file" onchange="previewImage4()" id="gambar4" class="form-control">
                        </div>
                    </div>    

                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">
                        </label>
                        <div class="col-md-6 col-sm-6">
                            <img class="img-preview5"style="width:200px">
                        </div>
                    </div>
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Gambar 5
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input name="gambar5" type="file" onchange="previewImage5()" id="gambar5" class="form-control">
                        </div>
                    </div>                  
                    


                                              
                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Harga <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <input type="number"  name="harga" required="required" class="form-control ">
                        </div>
                    </div>


                    <div class="item form-group">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Deskripsi <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 ">
                            <textarea type="text"  name="deskripsi" required="required" class="form-control "></textarea>
                        </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="item form-group">
                        <div class="col-md-6 col-sm-6 offset-md-3">
                            <a  href="{{url('admin/product')}}" class="btn btn-primary" type="button">Cancel</a>
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
    function previewImage1() {
    
    const gambar = document.querySelector('#gambar1');
    const imgpreview = document.querySelector('.img-preview1');

    imgpreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function(oFREvent){
      imgpreview.src = oFREvent.target.result;
    }
  }
  function previewImage2() {
    
    const gambar = document.querySelector('#gambar2');
    const imgpreview = document.querySelector('.img-preview2');

    imgpreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function(oFREvent){
      imgpreview.src = oFREvent.target.result;
    }
  }
  function previewImage3() {
    
    const gambar = document.querySelector('#gambar3');
    const imgpreview = document.querySelector('.img-preview3');

    imgpreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function(oFREvent){
      imgpreview.src = oFREvent.target.result;
    }
  }
  function previewImage4() {
    
    const gambar = document.querySelector('#gambar4');
    const imgpreview = document.querySelector('.img-preview4');

    imgpreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function(oFREvent){
      imgpreview.src = oFREvent.target.result;
    }
  }
  function previewImage5() {
    
    const gambar = document.querySelector('#gambar5');
    const imgpreview = document.querySelector('.img-preview5');

    imgpreview.style.display = 'block';

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function(oFREvent){
      imgpreview.src = oFREvent.target.result;
    }
  }
</script>
@endsection