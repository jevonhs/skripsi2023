@extends('layouts.main')

@section('content')

<div class="container">
        <div class="col-1" style="float: right;">
            <a href="{{ url('home')}}" class="btn btn-danger"><i class="bi bi-house-fill"></i> Balik</a>
        </div>
        <div class="alert alert-warning col-3">
            <div class="col-md-12 mt-2">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ route('cart.index')}}"> Cart</a></li>
                <li class="breadcrumb-item active" aria-current="page">Check Out</li>
            </ol>
        </nav>
    </div>
    </div>
    @php 
    $total = [];
    @endphp
    <div class="card-body" style="background-color: lavender;">
                    <form method="POST" action="{{ route('checkout.process') }}" enctype="multipart/form-data">
                        @csrf
                        @foreach($pembelians as $pembelian)
                        <div class="form-group">
                            <label>User Id</label>
                            <input type="text" class="form-control" name="user_id" value="{{ Auth::user()->id }}">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="penerima">Penerima</label>
                            <input type="text" class="form-control" name="penerima" value="{{ Auth::user()->username }}">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" value="{{ Auth::user()->alamat }}">
                        </div>
                        <div class="form-group">
                            <label>tanggal</label>
                            <input type="date" class="form-control" name="tanggal" value="<?php echo date('Y-m-d'); ?>"></input>
                        </div>
                        <div class="form-group">
                            <label>Total Harga</label>
                            <input type="number" class="form-control" name="jumlah_harga" value="<?php echo $pembelian->qty*$pembelian->produk->harga; ?>"></input>
                            <input type="hidden" name="qty" value="{{ $pembelian->qty }}">
                            <input type="hidden" name="produk_id" value="{{ $pembelian->produk_id }}">
                        </div>
                        @endforeach
                        <div style="background-color: orange;">
                        @foreach ($carts as $cart)
                        <?php         
                            array_push($total, $cart->produk->harga*$cart->qty);
                        ?>
                        @endforeach
                        </div>
                        <div style="float: right;">
                        <h8 class="total-item">Total Biaya</h8>
                        <h5 class="" style="color: green;">
                        <?php 
                        echo "Rp. " .number_format(array_sum($total), 0, '', '.');
                        ?>
                        </h5>
                        </div>
                        <div class="form-group col-mb-5">
                            <label>Upload Bukti Bayar</label> 
                            <input type ="file" class="form-control" name="bukti_bayar"></input>
                            <h7 style="text-align:end;"> No Rekening Pembayaran Bank: 1550374477 </h7>
                        </div>
                        <div class="form-group col-mb-5 mt-2">
                            <button class="btn btn-success" type="submit">Simpan</button>
                        </div>
                    </form>
                    
                </div>
@endsection