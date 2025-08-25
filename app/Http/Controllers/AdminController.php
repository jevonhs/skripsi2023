<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Pembelian;
use App\Models\Category;
use App\Models\Cart;
use App\Models\User;

class AdminController extends Controller
{
    public function index() 
    {    
        $total = Pembelian::count();
        $users = User::where('role', 'costumer')->count();
        $totalProduks = Produk::count();
        return view('admin.index', compact('total', 'users', 'totalProduks'));
    }
    public function produk($id = null)
    {
        $categories = Category::all();
        $produks = Produk::paginate(5);
        $minHarga = '';
        $maxHarga = '';
        return view('produk.index', compact('produks', 'categories', 'id', 'minHarga', 'maxHarga'));
    }

    public function usercostumer()
    {
        $user = User::where('role', 'costumer')->get();
        return view('user.index', compact('user'));
    }

    public function transaksi()
    {
            $pembelians = Pembelian::all();
            $item = Cart::count();
            return view('transaksi.index', compact('pembelians', 'item'));
    }
    
    public function updateStatus(Request $request, Pembelian $pembelian)
    {
        $validatedData = $request->validate([
            'status' => 'required|in:pending,dikirim,diterima'
        ]);

        $pembelian->update($validatedData);

        return redirect()->back()->with('success', 'Status pemesanan berhasil diperbarui.');
    }
    public function destroy($id)
    {
        $pembelian = Pembelian::find($id);
        $pembelian->delete();

        return redirect()->back()->with('success', 'Pemesanan berhasil dihapus.');
    }
}
