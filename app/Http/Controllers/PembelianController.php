<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Pembelian;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Models\PembelianDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class PembelianController extends Controller
{
    public function index($id)
    {
         $produks = Produk::where('id', $id)->first();
         return view('pembelian.beli', compact('produks'));
    }
    public function beli(Request $request, $id)
    {
        $produks = Produk::where('id',$id)->first();
        $tanggal = Carbon::now();
        
        if($request->jumlah_beli > $produks->stok)
        {
            return redirect('pembelian/'.$id);
        }
        $cek_pembelian = Pembelian::where('user_id', Auth::user()->id)->where('status',0)->first();

        if(empty($cek_pembelian))
        {
            $pembelian = new Pembelian;
            $pembelian->user_id = Auth::user()->id;
            $pembelian->penerima = Auth::user()->username;
            $pembelian->alamat = Auth::user()->alamat;
            $pembelian->tanggal = $tanggal;
            $pembelian->jumlah_harga= 0;
            $pembelian->status = 0;
            $pembelian->save();
        }
           $pembelian_baru = Pembelian::where('user_id', Auth::user()->id)->where('status',0)->first();

            $cek_pembelian_detail = PembelianDetail::where('produk_id', $produks->id)->where('pembelian_id', $pembelian_baru->id)->first();
        if(empty($cek_pembelian_detail))
        {
            $pembelian_detail = new PembelianDetail();
            $pembelian_detail->produk_id = $produks->id;
            $pembelian_detail->pembelian_id= $pembelian_baru->id;
            $pembelian_detail->tanggal = $tanggal;
            $pembelian_detail->jumlah = $request->jumlah_beli;
            $pembelian_detail->jumlah_harga = $produks->harga*$request->jumlah_beli;
            $pembelian_detail->save();
        }else
        {
            $pembelian_detail = PembelianDetail::where('produk_id', $produks->id)->where('pembelian_id', $pembelian_baru->id)->first();

            $pembelian_detail->jumlah = $pembelian_detail->jumlah+$request->jumlah_beli;

            $harga_pembelian_detail_baru =$produks->harga*$request->jumlah_beli;
            $pembelian_detail->jumlah_harga = $pembelian_detail->jumlah_harga+$harga_pembelian_detail_baru;
            $pembelian_detail->update();
        }
        
        $pembelian = Pembelian::where('user_id', Auth::user()->id)->where('status',0)->first();
        $pembelian->jumlah_harga = $pembelian->jumlah_harga+$produks->harga*$request->jumlah_beli;
        $pembelian->update();
        
        return redirect('checkout');
        }
        
        public function checkout(Request $request)
        {
            $pembelian = Pembelian::where('user_id', Auth::user()->id)->where('status',0)->first();
            $pembelian_details = [];
            if(!empty($pembelian))
            {
             $pembelian_detail = PembelianDetail::where('pembelian_id', $pembelian->id)->get();
            }
            return view('pembelian.checkout', compact('pembelian', 'pembelian_detail'));
        }

        public function delete($id)
        {
        $pembelian_detail = PembelianDetail::where('id', $id)->first();

        $pembelian = pembelian::where('id', $pembelian_detail->pembelian_id)->first();
        $pembelian->jumlah_beli = $pembelian->jumlah_beli-$pembelian_detail->jumlah_beli;
        $pembelian->update();

        $pembelian_detail->delete();

        return redirect('check-out');
        }

        public function accept($id)
        {   
        $pembelian = Pembelian::findOrFail($id);
        $pembelian->accepted = true;
        $pembelian->status = 'processing';
        $pembelian->save();

        return redirect()->route('admin.confiradmin')->with('success', 'pembe$pembelian accepted successfully!');
        }

        public function reject($id)
        {
        $pembelian = Pembelian::findOrFail($id);
        $pembelian->accepted = false;
        $pembelian->status = 'cancelled';
        $pembelian->save();

        return redirect()->route('admin.confiradmin')->with('success', 'pembe$pembelian rejected successfully!');
        }

}
