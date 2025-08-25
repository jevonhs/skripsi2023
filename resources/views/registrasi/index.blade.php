@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header" style="background-color: orange;"><h4>Registrasi</h4></div>
                <div class="card-body" style="background-image: url('/img/Template.png');">
                <form method="POST" action="{{ route('registrasi.index') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="username" class="col-md-4 col-form-label text-md-end">Username</label>
                        <div class="col-md-6">
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                        </div>
                    </div>

                    <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                    </div>

                    <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>
                        <div class="col-md-6">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                        </div>
                    </div>

                        <div class="row mb-3">
                                <label for="noHp" class="col-md-4 col-form-label text-md-end">No HP</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control @error('noHp') is-invalid @enderror" name="noHp" value="{{ old('noHp') }}" required autocomplete="noHp" autofocus>
                            </div>
                        </div>

                        <div class="row mb-3">
                                <label for="alamat" class="col-md-4 col-form-label text-md-end">Alamat</label>
                            <div class="col-md-6">
                                <textarea name="alamat" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" autofocus></textarea>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-12 offset-md-6" >
                                <button type="submit" class="btn btn-success">
                                    Registrasi
                                </button>
                            </div>
                        </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection