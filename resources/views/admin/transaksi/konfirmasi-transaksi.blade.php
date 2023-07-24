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
                        <label for="inputText" class="col-sm-4 col-form-label" style="font-weight:bold;color:rgb(32, 32, 25)">{{$loop->iteration}}.&nbsp;Nama Product</label>
                        <div class="col-sm-2">
                          : {{$value->product->nama}}
                        </div>
                      </div>                        
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label" style="font-weight:bold;color:rgb(32, 32, 25)">Quantity</label>
                        <div class="col-sm-2">
                          : {{$value->quantity}}
                        </div>
                      </div>  
                      @if ($value->size)
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label" style="font-weight:bold;color:rgb(32, 32, 25)">Size</label>
                        <div class="col-sm-2">
                          : {{$value->size->nama}}
                        </div>
                      </div>                          
                      @endif
                      @if ($value->customlembar)
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label" style="font-weight:bold;color:rgb(32, 32, 25)">Lembar</label>
                        <div class="col-sm-2">
                          : {{$value->customlembar->nama}}
                        </div>
                      </div>                          
                      @endif

                      @endforeach
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label" style="font-weight:bold;color:rgb(32, 32, 25)">Jumlah Yang Perlu Untuk Di Transfer</label>
                        <div class="col-sm-2">
                          : <b> @currency($value->total)</b>
                        </div>
                      </div> 
                      <div class="row mb-3">
                        <label for="inputText" class="col-sm-4 col-form-label" style="font-weight:bold;color:rgb(32, 32, 25)">Proses</label>
                        <div class="col-sm-6">
                          @if ($value->proses == 0)                                              
                          : <span class="btn btn-primary mb-3 text-white">Menunggu konfirmasi</span>
                          @else
                          : <span class="btn btn-info mb-3 text-white">Sudah konfirmasi</span>
                          @endif            
                        </div>    
                      </div>             

                        <div class="row mb-3">
                            <label for="inputText" class="col-sm-4 col-form-label" style="font-weight:bold;color:rgb(32, 32, 25)">Foto Transaksi</label>
                            <div class="col-sm-2">
                                : <img style="width: 150px;" src="{{ asset('storage/'. $value->foto_transaksi) }}" alt="">
                            </div>
                          </div>  
                          <form action="{{ url('admin/konfirmasi-proses/'.$kode->created_at.'/transaksi') }}" method="post">
                            @method('PUT')
                            @csrf
                              <div class="row mb-3">
                                  <label class="col-sm-2 col-form-label" style="font-weight:bold;color:rgb(32, 32, 25)">Proses Transaksi:</label>
                                  <div class="col-sm-6">
                                      <select class="form-control" name="proses">
                                          <option selected disabled>Silahkan Pilih Proses Transaksi</option>
                                          <option value="0" @if ($value->proses == 0) selected @endif>Menunggu konfirmasi</option>
                                          <option value="1" @if ($value->proses == 1) selected @endif>Sudah Di konfirmasi</option>                                         
                                        </select>
                                        <button class="btn btn-success mt-3" type="submit">Submit</button>
                                    </div>
                                </div>
                        </form>                    
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