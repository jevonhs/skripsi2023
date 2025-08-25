
<!-- <style>
  .sidebar{
    background-color: darkgrey
    ;
  }
</style> -->
<nav id="sidebarMenu" class="test col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
        <div class="position-sticky pt-5">
        <ul class="nav flex-column">
        @if(Auth::user()->role == 'admin')
        <li class="nav-item">
          <a class="nav-link {{ Request::is('admin') ? 'active' : ''}}" aria-current="page" href="{{ route('dashboard.admin') }}">
          <i class="bi bi-house-fill"></i>
            Beranda
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('produks') ? 'active' : ''}} " aria-current="page" href="{{ route('produk.admin') }}">
          <i class="bi bi-cart"></i>
            Produk
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('users') ? 'active' : ''}}" aria-current="page" href="{{ route('user.index') }}">
          <i class="bi bi-person-badge"></i>
            Daftar Pengguna
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('riwayat') ? 'active' : ''}}" aria-current="page" href="{{route('riwayat.index')}}">
          <i class="bi bi-clipboard"></i>
            Transaksi
          </a>
        </li>
        
        @else
          <li class="nav-item">
            <a class="nav-link {{ Request::is('costumer') ? 'active' : ''}} " aria-current="page" href="home">
            <i class="bi bi-cart"></i>
                Belanja
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('cart') ? 'active' : ''}}" href="{{ route('cart.index') }}">
            <i class="bi bi-bag-check"></i>
                Keranjang
            @if(!empty($item))
            <span class="badge bg-danger">{{ $item }}</span>
            @endif
            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('transaksi') ? 'active' : ''}}" href="{{route('transaksi.index')}}">
            <i class="bi bi-clipboard"></i>
                Transaksi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('recommend') ? 'active' : ''}}" href="{{ route('recommend') }}">
            <i class="bi bi-arrow-through-heart-fill"></i>
                Rekomendasi 
            </a>
          </li>
        @endif
        </ul>
      </div>
    </nav>
  </div>
</div>