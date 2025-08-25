@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 mb-5">
            <div class="card">
                <div class="card-header" style="background-color:orange;">Rekomendasi Produk</div>
                <div class="card-body" style="background-color: lavender; align-items: flex-end;">
                    <form action="{{ route('recommend') }}" method="GET">
                        @csrf
                        <div class="form-group col-md-4" style="display: inline-block">
                            <label for="category_id">Kategori</label>
                            <input type="text" class="form-control" name="category_id" id="category_id" value="makanan" readonly>
                            
                        </div>
                        <div class="form-group col-md-4" style="display: inline-block">
                            <label>Pilih Jenis Pet:</label>
                            <select id="pet_type" name="type" class="form-control">
                                <option value=""> --Pilih Jenis Hewan Anda--</option>
                                <option value="anjing" <?php echo $type == 'anjing' ? 'selected':'' ?>>Anjing</option>
                                <option value="kucing" <?php echo $type == 'kucing' ? 'selected':'' ?>>Kucing</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4" style="display: inline-block">
                            <label>Pilih Usia Pet:</label>
                            <select id="usia" name="usia" class="form-control">
                                <option value=""> --Pilih usia pet anda--</option>
                                <option value="puppy" <?php echo $usia == 'puppy' ? 'selected':'' ?>> Puppy (dibawah 1 tahun)</option>
                                <option value="adult" <?php echo $usia == 'adult' ? 'selected':'' ?>> Adult (1-4 tahun) </option>
                                <option value="mature" <?php echo $usia == 'mature' ? 'selected':'' ?>> Mature (diatas 4 tahun) </option>
                            </select>
                        </div>
                        <div class="form-group col-md-4" style="display: inline-block">
                            <label>Pilih Ras(Breeds) Pet:</label>
                            <select id="breed" name="breed" class="form-control">
                                <option value=""> --Pilih ras pet anda-- </option>
                                <option value="small" <?php echo $breed == 'small' ? 'selected':'' ?>> Kecil [berat < 10Kg tinggi < 40Cm ]</option>
                                <option value="medium" <?php echo $breed == 'medium' ? 'selected':'' ?>> Sedang [berat 10-15Kg tinggi 40-60Cm ]</option>
                                <option value="large" <?php echo $breed == 'large' ? 'selected':'' ?>> Besar [berat 25-45Kg tinggi 60-75Cm ]</option>
                                <option value="giant" <?php echo $breed == 'giant' ? 'selected':'' ?>> Giant [berat > 45Kg tinggi >75Cm ]</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4" style="display: inline-block">
                            <label>Bagaimana Aktivitas Pet:</label>
                            <select id="aktivitas" name="aktivitas" class="form-control">
                                <option value="">--bagaimana aktivitas pet?--</option>
                                <option value="aktif" <?php echo $aktivitas == 'aktif' ? 'selected':'' ?>> Aktif standar</option>
                                <option value="hiperaktif" <?php echo $aktivitas == 'hiperaktif' ? 'selected':'' ?>> Hiperaktif</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4" style="display: inline-block">
                            <label>Apakah ada alergi?</label>
                            <select id="alergi" name="alergi" class="form-control">
                                <option value="">--apakah ada alergi ayam?--</option>
                                <option value="tidak_ada" <?php echo $alergi == 'tidak_ada' ? 'selected':'' ?>> Tidak Ada</option>
                                <option value="ayam" <?php echo $alergi == 'ayam' ? 'selected':'' ?>> ada</option>
                            </select>
                        </div>
                        <div class="form-group mt-2" style="display:grid;">
                            <button class="btn btn-success" type="submit"><i class="bi bi-hand-thumbs-up-fill"></i> Dapatkan Rekomendasi</button>
                        </div>
                    </form>
                    <hr>
                    <h2 style="text-align: center;">Berikut saran produk dari kami</h2>
                    @if(isset($recommendedProduks))
                        <div class="row">
                        <div class="col-md-12 mb-3 mt-2">
                          <div class="card">
                          <table class="table table-striped mt-2">
                                <thead>
                                    <tr>
                                        <th>Gambar</th>
                                        <th>Nama</th>
                                        <th>Harga</th>
                                        <th>Deskripsi</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($recommendedProduks as $produk)
                                        <tr>
                                        <td><img src="{{ url('uploads/'.$produk->gambar) }}" alt="{{ $produk->nama_produk }}" width="100"></td>
                                        <td>{{ $produk->nama_produk }}</td>
                                        <td style="color: green;">Rp. {{number_format ($produk->harga) }}</td>
                                        <td>{{ $produk->deskripsi }}</td>
                                        <td><a href="{{ route('costumer.detail', $produk->id) }}" class="btn btn-warning">Detail</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection

