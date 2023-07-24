@extends('template.admin.dashboard')
@section('content_admin')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">            
            <div class="card">
            <div class="row">
       
                    <div class="card-body">
                      <h5 class="card-title font-weight-bold">Detail Data Transaksi</h5>
                      
                      @foreach ($data as $value)
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label" style="color: rgb(19, 179, 188);font-size:15px;font-weight:bold;">{{$loop->iteration}}.&nbsp;Nama Product</label>
                        <div class="col-sm-2" style="color: rgb(19, 179, 188);font-size:15px;font-weight:bold;">
                          : {{$value->product->nama}}
                        </div>
                      </div>                        
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label" style="color: rgb(19, 179, 188);font-size:15px;font-weight:bold;">Quantity</label>
                        <div class="col-sm-2" style="color: rgb(19, 179, 188);font-size:15px;font-weight:bold;">
                          : {{$value->quantity}}
                        </div>
                      </div>  
                      @if ($value->size)
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label" style="color: rgb(19, 179, 188);font-size:15px;font-weight:bold;">Size</label>
                        <div class="col-sm-2" style="color: rgb(19, 179, 188);font-size:15px;font-weight:bold;">
                          : {{$value->size->nama}}
                        </div>
                      </div>                          
                      @endif
                      @if ($value->customlembar)
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label" style="color: rgb(19, 179, 188);font-size:15px;font-weight:bold;">Lembar</label>
                        <div class="col-sm-2" style="color: rgb(19, 179, 188);font-size:15px;font-weight:bold;">
                          : {{$value->customlembar->nama}}
                        </div>
                      </div>                          
                      @endif

                      @endforeach
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label" style="color: rgb(19, 179, 188);font-size:15px;font-weight:bold;">Jumlah Yang Perlu Untuk Di Transfer</label>
                        <div class="col-sm-2" style="color: rgb(19, 179, 188);font-size:15px;font-weight:bold;">
                          : <b> @currency($value->total)</b>
                        </div>
                      </div> 
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label" style="color: rgb(19, 179, 188);font-size:15px;font-weight:bold;">Proses</label>
                        <div class="col-sm-6" style="color: rgb(19, 179, 188);font-size:15px;font-weight:bold;">
                          @if ($value->proses == 0)                                              
                          : <span class="btn btn-primary mb-3 text-white">Menunggu konfirmasi</span>
                          @else
                          : <span class="btn btn-info mb-3 text-white">Sudah konfirmasi</span>
                          @endif            
                        </div>    
                      </div>             

                          <div class="row mb-3">
                            <label for="inputText" class="col-sm-4 col-form-label" style="color: rgb(19, 179, 188);font-size:15px;font-weight:bold;">Foto Transaksi</label>
                            <div class="col-sm-2" style="color: rgb(19, 179, 188);font-size:15px;font-weight:bold;">
                                : <img style="width: 150px;" src="{{ asset('storage/'. $value->foto_transaksi) }}" alt="">
                            </div>
                          </div>                      
                        </div>
                      </div> 
                        <div class="row mb-3">                        
                          <div class="col-sm-4">
                            <a href="{{url('admin/transaksi')}}" class="btn btn-info text-white ml-2">Kembali</a>
                           
                          </div>
                        </div>
        
        
                    </div>
                  </div>
        
        
            </div>
        </div>
    </div>
</div>
@endsection