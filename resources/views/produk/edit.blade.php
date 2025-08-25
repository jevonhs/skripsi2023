@extends('layouts.main')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Produk</div>
 
                <div class="card-body" style="background-color: lavender;">
                @php
                    $breed = explode(',',$produks->breed);
                    $usia = explode(',',$produks->usia);
                @endphp
                    <form method="POST" action="{{ route('produk.update', $produks->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" class="form-control" name="gambar" value="{{ $produks->gambar }}" >
                        </div>
                        <div class="form-group col-md-5" style="display: inline-block">
                            <label for="category_id">Kategori</label>
                            <select id="category_id" class="form-control" name="category_id">
                                @foreach($category as $ctgy)
                                <option value="{{ $ctgy->id }}"> {{ $ctgy->nama }} </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-5" style="display: inline-block">
                            <label for="type">Type</label>
                            <select id="type" class="form-control" name="type">
                              <option value="umum" {{ $produks->type == 'umum' ? 'selected':'' }}> Umum</option>
                              <option value="anjing" {{ $produks->type == 'anjing' ? 'selected':'' }}> Anjing</option>
                              <option value="kucing" {{ $produks->type == 'kucing' ? 'selected':'' }}> Kucing</option>
                            </select>
                        </div>

                        <div class="form-group col-md-5" style="display: inline-block">
                            <label for="aktivitas">Aktivitas</label>
                            <select id="aktivitas" class="form-control" name="aktivitas">
                              <option value="jarang" {{ $produks->aktivitas == 'jarang' ? 'selected':'' }}>Kurang bergerak</option>
                              <option value="aktif" {{ $produks->aktivitas == 'aktif' ? 'selected':'' }}>Aktif</option>
                              <option value="hiperaktif" {{ $produks->aktivitas == 'hiperaktif' ? 'selected':'' }}>Hiperaktif</option>
                            </select>
                        </div>
                        <div class="form-group col-md-5" style="display: inline-block">
                            <label for="alergi">Alergi</label>
                            <select id="alergi" class="form-control" name="alergi">
                              <option value="tidak_ada" {{ $produks->alergi == 'tidak_ada' ? 'selected':'' }}> Tidak ada</option>
                              <option value="ayam" {{ $produks->alergi == 'ayam' ? 'selected':'' }}> Ayam</option>
                            </select>
                        </div>

                        <div class="form-group col-md-5" style="display: inline-block; background-color: l;">
                        <label style="font-family: fantasy;">Tipe Ras</label><br>
                            <div class="form-check form-check-inline">
                            <input type="checkbox" id="breed_small" name="breed[]" value="small" {{ in_array('small', $breed) ? 'checked':'' }}>
                            <label for="breed_small">Kecil</label><br>
                            </div>
                            <div class="form-check form-check-inline">
                            <input type="checkbox" id="breed_medium" name="breed[]" value="medium" {{ in_array('medium', $breed) ? 'checked':'' }}>
                            <label for="breed_medium">Sedang</label><br>
                            </div>
                            <div class="form-check form-check-inline">
                            <input type="checkbox" id="breed_large" name="breed[]" value="large" {{ in_array('large', $breed) ? 'checked':'' }}>
                            <label for="breed_large">Besar</label><br>
                            </div>
                            <div class="form-check form-check-inline">
                            <input type="checkbox" id="breed_giant" name="breed[]" value="giant" {{ in_array('giant', $breed) ? 'checked':'' }}>
                            <label for="breed_giant">Giant</label><br>
                        </div>
                        </div>

                        <div class="form-group col-md-6" style="display: inline-block">
                        <label style="font-family: fantasy;">Usia</label><br>
                          <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="usia_puppy" name="usia[]" value="puppy" {{ in_array('puppy', $usia) ? 'checked':'' }}>
                            <label class="form-check-label" for="usia_puppy">Puppy/Kitten</label><br>
                            </div>
                            <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="usia_adult" name="usia[]" value="adult" {{ in_array('adult', $usia) ? 'checked':'' }}>
                            <label class="form-check-label" for="usia_adult">Adult</label><br>
                            </div>
                            <div class="form-check form-check-inline">
                            <input type="checkbox" class="form-check-input" id="usia_mature" name="usia[]" value="mature" {{ in_array('mature', $usia) ? 'checked':'' }}>
                            <label for="usia_label">Mature</label><br>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control" name="nama_produk" value="{{ $produks->nama_produk }}">
                        </div>
                        
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="number" class="form-control" name="harga" value="{{ $produks->harga }}"></input>
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="number" class="form-control" name="stok" value="{{ $produks->stok }}"></input>
                        </div>
                        <div class="form-group col-mb-5">
                            <label>Deskripsi</label>
                            <textarea name ="deskripsi" class="form-control" rows="8" cols="50" name="deskripsi" >{{ $produks->deskripsi }}</textarea>
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