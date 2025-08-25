@extends('layouts.main')

@section('content')
<!-- Tampilan chat -->
@foreach ($chats as $chat)
    <div>
        <strong>{{ $chat->sender->name }}:</strong>
        {{ $chat->message }}
    </div>
@endforeach

<!-- Form untuk mengirim pesan -->



@endsection
