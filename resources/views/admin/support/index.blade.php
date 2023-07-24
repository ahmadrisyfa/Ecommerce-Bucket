@extends('template.admin.dashboard')
@section('content_admin')
<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Support <small>Silahkan Tambahkan Data Support</small></h2>        
        <div class="clearfix"></div>
      </div>

      @if(session()->has('berhasil'))
        <div class="alert alert-success alert-dismissible " role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
          </button>
         <strong> {{ session('berhasil') }}</strong>
        </div>
      @endif
      <div class="x_content">
        <a href="{{url('admin/support/create')}}" class="btn btn-success"><i class="fa fa-plus" style="margin-right: 5px"></i>Tambah Data</a>
        <div class="table-responsive">
          <table class="table table-striped jambo_table">
            <thead>
              <tr class="headings">              
                <th class="column-title">No </th>
                <th class="column-title">Judul </th>
                <th class="column-title">Deskripsi </th>
                <th class="column-title" style="text-align: center">Action</th>                           
              </tr>
            </thead>

            <tbody>
                @foreach ($data as $value)
                    
                <tr style="text-transform:capitalize;color:rgb(22, 19, 19);font-weight:bold;background-color:white">       
                    
                    <td>{{$loop->iteration }}</td>
                    <td>{{$value->judul}}</td>
                   <td> {{Illuminate\Support\Str::of($value->deskripsi)->words(10)}}</td>
                    <td>
                      <a href="{{ url('admin/support/'.$value->id.'/edit') }}" style="font-weight:bold" class="btn btn-info"><i class="fa fa-pencil" style="margin-right:10px"></i>Edit</a>
                      <a href="{{ url('admin/support/'.$value->id.'/detail') }}" style="font-weight:bold" class="btn btn-primary"><i class="fa fa-eye" style="margin-right:10px"></i>View</a>                    
                      <a href="{{url('admin/support/'.$value->id.'/hapus')}}" onclick="return confirm('Apakah Anda Yakin Menghapus Data Ini?');"  style="font-weight:bold" class="btn btn-danger"><i class="fa fa-trash" style="margin-right:10px"></i>Hapus</a>
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