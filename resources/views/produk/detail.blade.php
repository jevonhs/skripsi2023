<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <!-- CSS -->
<style>
    .chat-container {
        height: 400px;
        overflow-y: scroll;
        border: 1px solid #ccc;
        padding: 10px;
    }

    .chat-message {
        margin-bottom: 10px;
    }

    .chat-message p {
        margin: 0;
    }
</style>

<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function sendMessage() {
        var message = $('#message').val();
        $.ajax({
            url: '/chat/send',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                message: message
            },
            success: function(response) {
                $('#message').val('');
                getMessages();
            }
        });
    }

    function getMessages() {
        $.ajax({
            url: '/chat/messages',
            method: 'GET',
            success: function(response) {
                $('#chat-container').html(response);
                scrollToBottom();
            }
        });
    }

    function scrollToBottom() {
        var chatContainer = $('#chat-container');
        chatContainer.scrollTop(chatContainer[0].scrollHeight);
    }

    $(document).ready(function() {
        getMessages();
    });
</script>

</head>
<body>
@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mb-2">
            <a href="{{ url('home')}}" class="btn btn-primary"><i class="fa fa-home"></i> Balik</a>
        </div>
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ $produks->nama_produk }}</li>
        </ol>
        </nav>
        <div class="col-md-12">
            <div class="card" style="background-color: lightgray;">
                <div class="card-body">
                <div class="row">
                <div class="col-md-6">
                    <img src="{{url('uploads')}}/{{$produks->gambar}}"width="300" alt="">
                </div>
                <div class="col-md-6">
                    <h3>{{ $produks->nama_produk }}</h3>
                <table class="table table-bordered" style="background-color: lightslategray;">
                     <tbody>
                        <tr>
                            <td>Harga</td>
                            <td>:</td>
                            <td> Rp. {{ number_format($produks->harga) }} </td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td>:</td>
                            <td> {{ number_format($produks->stok) }} </td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td> : </td>
                            <td> {{ $produks->deskripsi }} </td>
                        </tr>
                    </tbody>
                </table>
                <form action="/cart/store" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="{{$produks->id}}" name="produk_id">
                        <input type="submit" class="btn btn-success" value="Add to Cart">
                </form>
        </div>
    </div>
</div>
@endsection
</body>
</html>
