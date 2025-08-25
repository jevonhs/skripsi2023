@extends('layouts.maincst')

@section('content')
    <h1 class="mb-2 text-center">Produk kami</h1>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        </div>
        
            @foreach($produks as $produk)
            <div class="col-md-3 mb-3">
                <div class="card">
                    <img src="{{ url('uploads') }}/{{ $produk->gambar }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h7 class="card-title">{{ $produk->nama_produk }}</h7>
                        <h5><p class="card-text">
                        <strong style="color: green;">Rp. {{ number_format($produk->harga)}} </strong></h5> 
                        <strong>Stok :</strong> {{ $produk->stok }} <br>
                        </p>
                    <a href="{{ url('pembelian') }}/{{ $produk->id }}" class="btn btn-primary"><i class="bi bi-cart-check-fill"></i> beli</a>
              </div>
            </div> 
        </div>
        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection