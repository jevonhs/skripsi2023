@extends('layouts.main')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Costumer</div>
                <div class="card-body">
                <table class="table table-striped" style="background-color: lavender;">
                      <thead>
                        <tr>
                            <th>user_id</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Alamat</th>
                        </tr>
                      </thead>
                      <tbody
                      @foreach($user as $us )
                      <tr>
                        <td>{{$us->id}}</td>
                        <td>{{$us->username}}</td>
                        <td>{{$us->email}}</td>
                        <td>{{ $us->alamat }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection