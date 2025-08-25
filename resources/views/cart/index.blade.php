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
                <li class="breadcrumb-item active"> Cart</></li>
            </ol>
        </nav>
    </div>
    </div>
    <div>
        <h3 style="background-color: lavender;"> {{ $item }} Item didalam keranjang</h3>
    </div>
    <hr class="mt-2 mb-2" style="background-color: lavender;">
    @php 
    $total = [];
    @endphp
    @foreach ($carts as $cart)
    <div class="cart"style="background-color: lavender;">
            <div class="row" style="background-color: lavender;">
                <div class="col-lg-3">
                <img class="img-cart" src="{{ url('uploads/'.$cart->produk->gambar) }}" alt="{{ $cart->nama_produk }}" height="200">
            </div>
                <div class="col-lg-9" >
                    <div class="top">
                        <h3 class="item-name">{{ $cart->produk->nama_produk }}</h3>
                            <p class="">Rp {{number_format($cart->produk->harga)}}</p>
                                <form action="{{ route('cart.update', $cart->id ) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <input type="number" name="qty" min="1" value="{{$cart->qty}}" max=" $cart->produk->stok  }}">
                                    <button type="submit" class="btn btn-primary btn-sm">Update</button>
                                </form>
                                <p class="col-lg-6 item-desk">
                                    {{ $cart->produk->deskripsi }}
                                </p>
                                    </div>
                                </div>
                            <div class="col-12">
                                    <h4 class="total-item">Subtotal</h4>
                                    <?php 
                                    echo "Rp. " .number_format($cart->produk->harga*$cart->qty, 0, '', '.');
                                    array_push($total, $cart->produk->harga*$cart->qty);
                                    ?>
                            </div>
                                <div class="col-12" style="float: right;">
                                <a href="{{route('checkout')}}" class="btn btn-success" style="width:100px; float:right;">Checkout</a>
                            </div>
                                <hr class="mt-2 mb-2">
                                <div class="bottom-end ">
                                <form method="POST" action="{{ route('cart.remove', $cart->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
    </div>
@endforeach
<br>
    <div style="background-color: orange;">
    <h8 class="total-item">Total Biaya</h8>
    <h5 class="" style="color: green;">
    <?php 
    echo "Rp. " .number_format(array_sum($total), 0, '', '.');
    ?>
    </h5>
    </div>
</div>
</div>

@endsection
