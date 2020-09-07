@extends('layouts.default')

@section('content')
    <div class="orders">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">
              <h4 class="box-title">Daftar Bukti Pembayaran Masuk</h4>
            </div>
            <div class="card-body--">
              <div class="table-stats order-table ov-h">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Nama Customer</th>
                      <th>Total Transaksi</th>
                      <th>Foto</th>
                    </tr>
                  </thead>
                  <tbody>
                   
                    @forelse ($items as $item)
                      <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->transaction_total }}</td>
                        <td>
                          <a href="{{ url('/img/buktipem/'.$item->bukti_transaksi) }}" target="_blank" rel="noopener noreferrer">
                            <img src="{{ url('/img/buktipem/'.$item->bukti_transaksi) }}" alt="" />
                          </a>  
                        </td>
                        
                      </tr>
                    @empty
                        <tr>
                          <td colspan="6" class="text-center p-5">
                            Data tidak tersedia
                          </td>
                        </tr>
                    @endforelse
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection