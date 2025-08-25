@extends('layouts.main')

@section('content')
<div class="container">

    <div class="card mt-3">
    @if(Auth::user()->role == 'costumer')
        <div class="card-header">Pembelian Anda</div>
    @endif
            @if(Auth::user()->role == 'admin')
            <div class="card-header">Pemesanan Masuk</div>
        @endif
                <div class="card-body">
                    <table class="table table-striped" style="background-color: lavender;">
                      <thead>
                        <tr>
                            <th>User_id</th>
                            <th>Penerima</th>
                            <th>Alamat</th>
                            <th>Tanggal</th>
                            <th>Total Harga</th>
                            <th>Bukti Bayar</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($pembelians as $pembelian)
                            <tr>
                                <td>{{ $pembelian->user_id }}</td>
                                <td>{{ $pembelian->penerima }}</td>
                                <td>{{ $pembelian->alamat }}</td>
                                <td>{{ $pembelian->tanggal }}</td>
                                <td>Rp. {{number_format($pembelian->jumlah_harga) }}</td>
                                <td><a href="{{ asset('bukti_bayar/'.$pembelian->bukti_bayar) }}" download>{{ $pembelian->bukti_bayar }}</a></td>
                            @if(Auth::user()->role == 'costumer') 
                                <td>{{ $pembelian->status }}</td>
                            
                                <td>
                                <form action="{{ route('pembelians.destroy', $pembelian->id) }}"    method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pemesanan ini?')">Hapus</button>
                                </form>
                                </td>
                            @endif
                            
                            @if(Auth::user()->role == 'admin')
                                <td>
                                <form action="{{ route('pembelians.updateStatus', $pembelian) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <select name="status">
                                    <option value="pending" <?php echo $pembelian->status == 'pending' ? 'selected':'' ?>>Pending</option>
                                    <option value="dikirim" <?php echo $pembelian->status == 'dikirim' ? 'selected':'' ?>>Dikirim</option>
                                    <option value="diterima" <?php echo $pembelian->status == 'diterima' ? 'selected':'' ?>>Diterima</option>
                                    </select>
                                        <button class="button btn-info">Update Status</button>
                                    </form>
                                </td>
                                <td>
                                <form action="{{ route('pembelian.destroy', $pembelian->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="button btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pemesanan ini?')">Hapus</button>
                                </form>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                            </tbody>
                            </table>
                       </div>
                    </div>
                </div>
           </div>
        </div>
@endsection