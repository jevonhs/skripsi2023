@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="header"><h2>Beranda</h2></div>
            <div style="display: flex;">
                <div class="card">
                    <div class="card-body text-white fd-row d-flex" style="background-color: green;">
                        <div class="row">
                            <div class="col-md-6">
                            <h3>{{ $total }}</h3>
                            <h5 style="text-shadow: aliceblue;">Total Pesanan</h5>
                            </div>
                            <div class="col-md-6">
                                <p style="font-size:50px ;">
                                <i class="bi bi-bag-heart"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center" style="background-color: darkgreen;">
                        <a href="{{route('riwayat.index')}}" class="text-white">Lihat Detail</a>
                    </div>
                </div>

                <div class="card" style="margin-left: 8px;">
                    <div class="card-body fd-row d-flex" style="background-color: orange ;">
                        <div class="row">
                            <div class="col-md-6">
                            <h3>{{ $users }}</h3>
                            <h5>Total Pengguna</h5>
                            </div>
                            <div class="col-md-6">
                                <p style="font-size:50px ;">
                                <i class="bi bi-person-square"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center" style="background-color: darkorange;">
                        <a href="{{ route('user.index') }}" class="text-white">Lihat Detail</a>
                    </div>
                </div>

                <div class="card text-white" style="margin-left: 8px;">
                    <div class="card-body fd-row d-flex" style="background-color: blue;">
                        <div class="row">
                            <div class="col-md-6">
                            <h3>{{ $totalProduks }}</h3>
                            <h5>Total Produk</h5>
                            </div>
                            <div class="col-md-6">
                                <p style="font-size:50px ;">
                                <i class="bi bi-cart4"></i>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer text-center" style="background-color: darkblue;">
                        <a href="{{ route('produk.index') }}" class="text-white">Lihat Detail</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


@endsection
