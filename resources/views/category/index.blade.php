@extends('layouts.main')

@section('content')

<h1>{{ $category->nama }}</h1>

@foreach ($produks as $produk)
    <div>
        <h3>{{ $produk->name }}</h3>
        <p>{{ $produk->deskripsi }}</p>
        <p>{{ $produk->harga }}</p>
    </div>
@endforeach

{{ $produks->links() }}

@endsection