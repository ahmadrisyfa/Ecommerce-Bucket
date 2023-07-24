@extends('template.admin.dashboard')
@section('content_admin')
<div class="col-md-12 col-sm-12  ">
    <div class="x_panel">
      <div class="x_title">
        <h2>Data Transaksi</h2>        
        <div class="clearfix"></div>
      </div>

      @if(session()->has('berhasil'))
        <div class="alert alert-success alert-dismissible " role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
          </button>
         <strong> {{ session('berhasil') }}</strong>
        </div>
      @endif
      <form action="{{url('admin/transaksi/search')}}" method="post">
        @csrf
        <div class="col-md-3 col-sm-4 ">
             Dari Tanggal <input id="fromDate" name="fromDate" value="{{ request('fromDate') }}"
                class="date-picker form-control" type="date" required>
        </div>
        <div class="col-md-3 col-sm-4 ">
            Sampai Tanggal
            <input id="toDate" name="toDate" value="{{ request('toDate') }}" class="date-picker form-control"
                type="date" required>
        </div>
        <div class="col-md-3" style="margin-top: 18px;">

            <button class="btn btn-info" style="font-weight:bold" type="submit"><i class="fa fa-search"
                    style="margin-right:8px"></i>Cari</button>
                    <a href="{{url('admin/cetak/transaksi')}}" style="font-weight:bold" class="btn btn-primary"><i class="bi bi-printer-fill" style="margin-right:10px"></i>Cetak</a>

        </div>
    </form>
      <div class="x_content">
        <div class="table-responsive">
          <table class="table table-striped jambo_table">
            <thead>
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Pembeli</th>
                <th scope="col">Total</th>
                <th scope="col">Tanggal Pemesanan</th>
                <th scope="col">Proses</th>
                <th scope="col" colspan="2" >Action</th>
              </tr>
            </thead>

            <tbody>
                @foreach ($data as $value)
                    
                <tr style="text-transform:capitalize;color:rgb(22, 19, 19);font-weight:bold;background-color:white">       
                    
                  <td>{{$loop->iteration}}</td>
                  <td>{{$value->user->name}}</td>
                  <td>@currency($value->total)</td>
                  <td>{{$value->created_at}}</td>
                  @if ($value->proses == 0)
                  <td>Menunggu konfirmasi</td>
                  @else
                  <td>Sudah Di Konfirmasi</td>                      
                  @endif
                  <td>
                    <a href="{{ url('admin/detail/'.$value->created_at.'/transaksi') }}" style="font-weight:bold" class="btn btn-info"><i class="fa fa-eye" style="margin-right:10px"></i>Detail</a>                              
                  </td>
                  <td>
                    <a href="{{ url('admin/konfirmasi-proses/'.$value->created_at.'/transaksi') }}" style="font-weight:bold" class="btn btn-primary"><i class="fa fa-check" style="margin-right:10px"></i>Konfirmasi Proses</a>
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