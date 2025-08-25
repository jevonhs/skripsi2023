<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Pembelian;
use Illuminate\Support\Facades\Auth;

class CostumerController extends Controller
{
    public function index(Request $request, $id = null) 
    {    
        $categories = Category::all();
        $minHarga = '';
        $maxHarga = '';
        $produks = Produk::where('nama_produk', 'LIKE', '%'.$request->search.'%')->paginate(5);
        $item = Cart::where('user_id', Auth::user()->id)->count();
        return view('produk.index', compact('produks', 'categories', 'id', 'item', 'minHarga', 'maxHarga'));
    }
    public function detail($id)
    {
        $produks = Produk::findOrfail($id);
        $item = Cart::count();
        return view('produk.detail', compact('produks', 'item'));
    }

    public function transaksi()
    {
    if (Auth::user()->role == 'costumer') {
        $pembelians = Pembelian::where('user_id', Auth::user()->id)->get();
        $item = Cart::where('user_id', Auth::user()->id)->count();
    } else {
        $pembelians = Pembelian::all();
        $item = Cart::count();
    }
    
    return view('transaksi.index', compact('pembelians', 'item'));
    }
    public function showBuktiBayar($filename)
    {
        // Path ke direktori penyimpanan bukti bayar (misalnya storage/app/public/bukti_bayar)
        $path = public_path('bukti_bayar/' . $filename);

        if (file_exists($path)) {
            return response()->file($path);
        } else {
            abort(404);
        }
    }
    public function destroy($id)
    {
        $pembelian = Pembelian::find($id);
        $pembelian->delete();

        return redirect()->back()->with('success', 'Pemesanan berhasil dihapus.');
    }

    public function recommend(Request $request)
    {
        $category = Category::selectRaw("id, nama")->get();
        $minHarga = '';
        $maxHarga = '';
        if ($request->has('type')) {
            $recommendedProduks = Produk::where('type', $request->type)
                ->where('usia', 'like', '%'.$request->usia.'%')
                ->where('breed', 'like', '%'.$request->breed.'%')
                ->where('alergi', $request->alergi)
                ->where('aktivitas', $request->aktivitas)
                ->where('category_id', 1)
                ->get();
            $item = Cart::count();
            $type = $request->type;
            $usia = $request->usia;
            $breed = $request->breed;
            $alergi = $request->alergi;
            $aktivitas = $request->aktivitas;
            $categoryId = 1;
        } else {
            $recommendedProduks = null;
            $item = Cart::count();
            $type = '';
            $usia = '';
            $breed = '';
            $alergi = '';
            $aktivitas = '';
            $categoryId = '';
        }
       
        return view('recommend.index', compact('recommendedProduks', 'item', 'category', 'type', 'usia', 'breed', 'alergi', 'aktivitas', 'categoryId', 'minHarga', 'maxHarga'));
    }

        public function search(Request $request, $id = null)
    {
        $categories = Category::all();
        $cari = $request->q;
        $minHarga = '';
        $maxHarga = '';
        $produks = Produk::where('nama_produk', 'like', '%'.$cari.'%')->paginate(5);
        return view('produk.index', compact('produks', 'categories', 'id', 'minHarga', 'maxHarga'));
    }

    public function filtharga(Request $request, $id = null)
    {
        $categories = Category::all();
        $minHarga = $request->input('min_harga');
        $maxHarga = $request->input('max_harga');

        $produks = Produk::whereBetween('harga', [$minHarga, $maxHarga])->paginate(5);

        return view('produk.index', compact('produks', 'categories', 'id', 'minHarga', 'maxHarga'));
    }

    public function sort(Request $request)
    {
        $sort = $request->input('sort'); // Mengambil parameter sort dari URL

        // Mengambil daftar produk dengan pengurutan harga
        $produks = Produk::orderBy('harga', $sort)->get();
        $item = Cart::count();
        $type = $request->type;
        $usia = $request->usia;
        $breed = $request->breed;
        $alergi = $request->alergi;
        $aktivitas = $request->aktivitas;
        $categoryId = 1;

        $recommendedProduks = null;
        $item = Cart::count();
        $type = '';
        $usia = '';
        $breed = '';
        $alergi = '';
        $aktivitas = '';
        $categoryId = '';

        return view('recommend.index', compact('produks', 'item', 'type', 'usia', 'breed', 'alergi', 'aktivitas', 'categoryId',));
    }
}
