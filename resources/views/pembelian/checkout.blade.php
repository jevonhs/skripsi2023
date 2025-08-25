@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12 mb-2">
            <a href="{{ url('home')}}" class="btn btn-primary"><i class="fa fa-home"></i> Balik</a>
        </div>
        <div class="col-md-12 mt-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Check Out</li>
            </ol>
        </nav>
    </div>
    <form method="POST" action="{{ route('checkout') }}">
    @csrf
    <div>
        <label for="nama">Nama Lengkap</label>
        <input type="text" name="nama" value="{{ old('nama') }}">
    </div>
    <div>
        <label for="alamat">Alamat</label>
        <textarea name="alamat">{{ old('alamat') }}</textarea>
    </div>
    <div>
        <label for="noHp">Nomor Telepon</label>
        <input type="text" name="noHp" value="{{ old('noHp') }}">
    </div>
    <div>
        <label for="payment_method">Metode Pembayaran</label>
        <select name="payment_method">
            <option value="cash">Cash On Delivery</option>
            <option value="transfer">Transfer Bank</option>
        </select>
    </div>
    <button type="submit">Beli</button>
</form>


@endsection