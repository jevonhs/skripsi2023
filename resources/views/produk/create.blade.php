@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Produk</div>
 
                <div class="card-body" style="background-color: lavender;">
                    <form method="POST" action="{{ route('produk.store') }}" enctype="multipart/form-data">
                        @csrf
 
                        <div class="form-group">
                            <label style="font-family: fantasy;">Gambar</label>
                            <input type="file" class="form-control" name="gambar" value="{{ old('gambar') }}">
                        </div>
                        <div class="form-group col-md-5" style="display: inline-block">
                            <label for="category_id" style="font-family: fantasy;">Kategori</label>
                            <select id="category_id" class="form-control" name="category_id">
                            @foreach($category as $ctgy)
                            <option value="{{ $ctgy->id }}"> {{ $ctgy->nama }} </option>
                            @endforeach
                            </select>
                        </div>

                        <div class="form-group col-md-6" style="display: inline-block">
                        <label style="font-family: fantasy;">Jenis</label>
                                <select id="type" name="type" class="form-control">
                                <option value=""> Masukan jenis hewan</option>
                                <option value="anjing">Anjing</option>
                                <option value="kucing">Kucing</option>
                                </select>
                        </div>
                        <div class="form-group col-md-5" style="display: inline-block">
                        <label style="font-family: fantasy;">Alergi</label>
                                <select id="alergi" name="alergi" class="form-control">
                                <option value=""> pengganti alergi apa? </option>
                                <option value="tidak_ada">Tidak ada</option></option>
                                <option value="ayam">Ayam</option>
                                </select>
                        </div>

                        <div class="form-group col-md-6"style="display: inline-block">
                        <label style="font-family: fantasy;">Aktivitas</label>
                                <select id="aktivitas" name="aktivitas" class="form-control">
                                <option value=""> untuk aktivitas seperti apa? </option>
                                <option value="aktif">Aktif</option>
                                <option value="hiperaktif">Hiperaktif</option>
                                </select>
                        </div>

                        <div class="form-group col-md-5" style="display: inline-block; background-color: l;">
                        <label style="font-family: fantasy;">Tipe Ras</label><br>
                            <div class="form-check form-check-inline">
                            <input type="checkbox" id="breed_small" name="breed[]" value="small">
                            <label for="breed_small">Kecil</label><br>
                            </div>
                            <div class="form-check form-check-inline">
                            <input type="checkbox" id="breed_medium" name="breed[]" value="medium">
                            <label for="breed_medium">Sedang</label><br>
                            </div>
                            <div class="form-check form-check-inline">
                            <input type="checkbox" id="breed_large" name="breed[]" value="large">
                            <label for="breed_large">Besar</label><br>
                            </div>
                            <div class="form-check form-check-inline">
                            <input type="checkbox" id="breed_giant" name="breed[]" value="giant">
                            <label for="breed_giant">Giant</label><br>
                        </div>
                        </div>

                        <div class="form-group col-md-6" style="display: inline-block">
                        <label style="font-family: fantasy;">Usia</label><br>
                          <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="usia_puppy" name="usia" value="puppy">
                            <label class="form-check-label" for="usia_puppy">Puppy/Kitten</label><br>
                            </div>
                            <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="usia_adult" name="usia" value="adult">
                            <label class="form-check-label" for="usia_adult">Adult</label><br>
                            </div>
                            <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="usia_mature" name="usia" value="mature">
                            <label for="usia_label">Mature</label><br>
                            </div>
                        </div>

                        <div class="form-group">
                            <label style="font-family: fantasy;">Nama</label>
                            <input type="text" class="form-control" name="nama_produk" value="{{ old('nama_produk') }}">
                        </div>

                        <div class="form-group">
                            <label style="font-family: fantasy;">Harga</label>
                            <input type="number" class="form-control" name="harga" value="{{ old('harga') }}"></input>
                        </div>
                        <div class="form-group">
                            <label style="font-family: fantasy;">Stok</label>
                            <input type="number" class="form-control" name="stok" value="{{ old('stok') }}"></input>
                        </div>
                        <div class="form-group col-mb-5">
                            <label style="font-family: fantasy;">Deskripsi</label>
                            <textarea name ="deskripsi" class="form-control" name="deskripsi" value="{{ old('deskripsi') }}"></textarea>
                        </div>
                        <div class="form-group col-mb-5 mt-2">
                            <button class="btn btn-primary">Simpan</button>
                        </div>
 
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection