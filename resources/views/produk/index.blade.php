@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <div class="col-lg-2">
            <div class="Kategori">
            <h3 id="category-label">Kategori</h3>
            <select class="form-select text-light" style="background-color:orange; font-family:sans-serif" aria-label="Pilih Kategori" onchange="location = this.value;">
                    <option value="/produk/category/0">Semua</option>
                    @foreach ($categories as $category)
                        <option value="/produk/category/{{ $category->id }}" {{ $category->id == $id ? 'selected': '' }}>{{ $category->nama }}</option>
                    @endforeach
                </select>
            </div>
          </div>
                <div class="card mt-3">
                    <div class="card-header">
                    <form action="{{ route('produk.search') }}" method="get" class="row">
                        <div class="col-md-9">
                        <input name="q" class="form-control" type="search" placeholder="Search" aria-label="Search">
                        </div>
                        <div class="col-sm-3">
                        <button class="btn btn-outline-primary" type="submit">Search</button>
                        </div>  
                    </form>
                    </div>
                    <form action="{{ route('produk.filtharga') }}" method="post" >
                        @csrf
                        <label for="min_harga">Minimum Harga:</label>
                        <input type="number" name="min_harga" id="min_harga" value="{{ $minHarga }}">

                        <label for="max_harga">Maximum Harga:</label>
                        <input type="number" name="max_harga" id="max_harga" value="{{ $maxHarga }}">
                        <button class="btn btn-outline-warning" type="submit">Filter</button>

                    </form>
                <div class="card-body"style="background-color: lavender;">
                    <table class="table table-striped mt-2">
                        <tr style="background-color: lavender;">
                            <th>Gambar</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th>Stok</th>
                            <th>Tipe</th>
                        @if(Auth::user()->role === "costumer")
                            <th>Action</th>
                        @endif
                        @if(Auth::user()->role === "admin")
                            <th>Action</th>
                        @endif
                    </tr>
                    <tbody>
                    @foreach($produks as $produk)
                        <tr>
                            <td><img src="{{ url('uploads/'.$produk->gambar) }}" alt="{{ $produk->nama_produk }}" width="100"></td>
                            <td>{{ $produk->nama_produk }}</td>
                            <td style="color: green;">Rp. {{number_format ($produk->harga) }}</td>
                            <td>{{ $produk->stok }}</td>
                            <td>{{ $produk->type }}</td>
                        @if(Auth::user()->role === "costumer")
                            <td>
                            <a href="{{ route('costumer.detail', $produk->id) }}" class="btn btn-warning">Detail</a>
                            </td> 
                        @endif
                            
                        @if(Auth::user()->role === "admin")
                            <td>
                            <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-warning">Edit</a>

                            <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            </td>
                        @endif
                            </tr>
                    @endforeach
                    
                    @if(Auth::user()->role === "admin")
                        <div class="mt-2">
                        <a href="{{ route('produk.create') }}" class="btn btn-success">Tambah Produk</a>
                    </div>
                    @endif
                        </tbody>
                        </table>
                        {{ $produks->links() }}
                    </div>
                </div>
           </div>
     </div>
     
</div>
@if(Auth::user()->role == 'costumer')
<div class="modal" id="m" tabindex="-1" style="display: inline-block;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header" style="background-color: orange;">
        <h5 class="modal-title">Anda Butuh Rekomendasi Makanan Pet ?</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close" onclick="return myFunction();"></button>
      </div>
      <div class="modal-body">

        <div class="card bg-dark text-black">
        <img src="/img/iklan.jpg" alt="">
        </div>
    </div>

      <div class="modal-footer" style="background-color: orange;">
      <a href="{{ route('recommend') }}" class="btn btn-success">Boleh</a>
      </div>
      </div>
    </div>
  </div>
</div>
   @endif
   <script>
    function myFunction() {
        var x = document.getElementById("m");
        x.style.display = "none";
    }
</script>
@endsection


