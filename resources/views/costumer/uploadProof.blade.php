@extends('layouts.main')

@section('content')

<form action="{{ route('pembelian.uploadProof', $pembelian->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="proof">Bukti Transfer</label>
        <input type="file" class="form-control-file @error('proof') is-invalid @enderror" id="proof" name="proof" required>
        @error('proof')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Upload</button>
</form>

@endsection