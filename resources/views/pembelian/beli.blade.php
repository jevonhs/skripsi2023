@extends('layouts.main')

@section('content')
<table class="table">
    <thead>
        <tr>
            <th>Nama Produk</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Total</th>
        </tr>
    </thead>
    <tbody>
        @foreach (Cart::content() as $item)
        <tr>
            <td>{{ $item->nama_produk }}</td>
            <td>{{ $item->jumlah_beli }}</td>
            <td>{{ number_format($item->harga, 0, ',', '.') }}</td>
            <td>{{ number_format($item->total, 0, ',', '.') }}</td>
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3">Total Harga</td>
            <td>{{ number_format(Cart::total(), 0, ',', '.') }}</td>
        </tr>
    </tfoot>
</table>

<form action="{{ route('checkout') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="penerima">Nama:</label>
        <input type="text" id="penerima" name="penerima" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="alamat">Email:</label>
        <input type="email" id="email" name="email" class="form-control" required>
    </div>
    <div class="form-group">
        <label for="address">Alamat:</label>
        <textarea id="address"name="address" class="form-control" required></textarea>
    </div>
    <div class="form-group">
    <label for="phone">Nomor Telepon:</label>
    <input type="text" id="phone" name="phone" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Proses Checkout</button>

</form>

@endsection