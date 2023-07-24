@extends('template.admin.dashboard')
@section('content_admin')
<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Nama Dan Logo <small>Silahkan Tambahkan Data Nama Dan Logo</small></h2>        
        <div class="clearfix"></div>
      </div>

      @if(session()->has('berhasil'))
        <div class="alert alert-success alert-dismissible " role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
          </button>
         <strong> {{ session('berhasil') }}</strong>
        </div>
      @endif

      <div class="alert alert-info alert-dismissible " role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
        </button>
       <strong style="color: white">Data Pertama Di Input, Yang Akan Di Aktifkan!</strong>
      </div>
      
      <div class="x_content">
        <a href="{{url('admin/nama_dan_logo/create')}}" class="btn btn-success"><i class="fa fa-plus" style="margin-right: 5px"></i>Tambah Data</a>
        <div class="table-responsive">
          <table class="table table-striped jambo_table">
            <thead>
              <tr class="headings">              
                <th class="column-title">No </th>
                <th class="column-title">Nama </th>
                <th class="column-title">Gambar / Logo </th>
                <th class="column-title" colspan="2" style="text-align: center">Action</th>                           
              </tr>
            </thead>

            <tbody>
                @foreach ($data as $value)
                    
                <tr style="text-transform:capitalize;color:rgb(22, 19, 19);font-weight:bold;background-color:white">       
                    
                    <td>{{$loop->iteration }}</td>
                    <td>{{$value->nama}}</td>
                    <td><img style="width: 50px;" src="{{ asset('storage/'. $value->gambar) }}" alt=""></td>
                    <td>
                      <a href="{{ url('admin/nama_dan_logo/'.$value->id.'/edit') }}" style="font-weight:bold" class="btn btn-info"><i class="fa fa-pencil" style="margin-right:10px"></i>Edit</a>
                    </td>
                    <td>
                      <a  href="{{url('admin/nama_dan_logo/'.$value->id.'/hapus')}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?');"  style="font-weight:bold" class="btn btn-danger"><i class="fa fa-trash" style="margin-right:10px"></i>Hapus</a>
                    </td>
                </tr>            
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
</div>
@endsection