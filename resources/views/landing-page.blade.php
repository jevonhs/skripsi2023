@extends('layouts.front')

@section('isi')

  <div class="card bg-dark text-white" style="position: relative;">
    <img class="card-img" src="{{ asset('img/banner.jpg') }}" alt="Card image">
    <div class="card-img-overlay" style="display: flex; justify-content: center; align-items: center; text-align: center;">
    </div>
</div>
    <div class="container mt-2">z
            <p class="card-text" style="background-color: lavenderblush;">
                Tempat terbaik untuk menemukan makanan dan aksesoris terbaik untuk hewan peliharaan Anda! Kami dengan bangga menawarkan berbagai macam produk yang dirancang khusus untuk anjing dan kucing kesayangan Anda. Dengan kombinasi antara kualitas terbaik, keselamatan, dan kenyamanan, kami memiliki segala yang Anda butuhkan untuk menjaga hewan peliharaan Anda bahagia dan sehat.
            </p>
    </div>

    @foreach($produks as $produk)
      <div class="col-lg-8">
      <h3 class="card-hearder" style="text-align: left; font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;">Produk Kami</h3>
    <div class="card-group" style="border-radius: 5px;">

      <div class="card" style="background-color: lightgray;">
      <img class="card-img-top" src="{{asset('uploads/Makanan 2.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-body">DOG FOOD SUPER PREMIUM NUTRISOURCE ADULT LARGE BREED</h5>
      </div>
    </div>

    <div class="card" style="background-color: lightgray;">
      <img class="card-img-top" src="{{asset('uploads/Aksesoris Ring Chain.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-body">RING CHAIN COLLAR + LEASH NYLON</h5>
      </div>
    </div>

    <div class="card" style="background-color: lightgray;">
      <img class="card-img-top" src="{{asset('uploads/Makanan Kucing 1.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-body">CAT FOOD TASTY MIX WHISKAS POUCH 85G</h5>
      </div>
    </div>

    <div class="card" style="background-color: lightgray;">
      <img class="card-img-top" src="{{asset('uploads/DOGFOOD OPTIMA LAMB Adult.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-body">DOGFOOD OPTIMA LAMB </h5>
      </div>
    </div>

    <div class="card" style="background-color: lightgray;">
      <img class="card-img-top" src="{{asset('uploads/Aksesoris 4.jpg')}}" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-body">COLLAR KRINCING & LEASH</h5>
      </div>
    </div>

  </div>
</div>
    @endforeach

@endsection
<!-- End Footer -->
