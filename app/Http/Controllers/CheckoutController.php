<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Produk;
use App\Models\Pembelian;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class CheckoutController extends Controller
{
    public function index()
    {
        // Mengambil data keranjang pengguna
        $pembelians = Cart::with('produk')->get();
        $carts = Cart::with('produk')->get();
        $item = Cart::where('user_id', Auth::user()->id)->count();
        return view('checkout.index', compact('carts', 'pembelians', 'item'));
    }

    public function process(Request $request)
    {
        $tanggal = Carbon::now();

        $buktiBayar = $request->file('bukti_bayar');
        $buktiBayarPath = time() . '.' . $buktiBayar->extension();
        $buktiBayar->move(public_path('bukti_bayar'), $buktiBayarPath);
        
        // Simpan data pesanan ke dalam database
        Pembelian::create([
            'user_id' => Auth::user()->id,
            'penerima' => Auth::user()->username,
            'alamat' => Auth::user()->alamat,
            'tanggal' => $tanggal,
            'jumlah_harga' => $request->jumlah_harga,
            'bukti_bayar' => $buktiBayarPath, // Ubah dengan path file bukti pembayaran
            'status' => 'pending', // Tambahkan status yang sesuai
            // Simpan data lain sesuai kebutuhan
        ]);
        $produk= Produk::find($request->produk_id);
        $produk->stok = $produk->stok - $request->qty;
        $produk->save();
        // Hapus semua item keranjang pengguna
        Cart::where('user_id', Auth::user()->id)->delete();

        // Redirect ke halaman sukses atau tampilkan notifikasi
        return redirect()->route('home')->with('success', 'Pesanan berhasil diproses.');
    }

    public function success()
    {
        return view('produk.index');
    }
}
