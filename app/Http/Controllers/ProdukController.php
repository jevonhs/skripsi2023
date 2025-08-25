<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Category;
use App\Models\Cart;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $id = null)
    {
        $categories = Category::all();
        $produks = Produk::paginate(5);
        $minHarga = '';
        $maxHarga = '';
        return view('produk.index', compact('produks', 'categories', 'id', 'minHarga', 'maxHarga'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::selectRaw("id, nama")->get();
        $produks = Produk::all();
        return view('produk.create', compact('produks','category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasFile('gambar')){
            $foto_prd = $request->file('gambar');
            $fotoPrd = $foto_prd->getClientOriginalName();
            $foto_prd->move('uploads/', $fotoPrd);
        }
        $breed = json_encode($request->get('breed'));
        $usia = json_encode($request->get('usia'));
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'type' => $request->type,
            'category_id' => $request->category_id,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'usia' => $usia,
            'alergi' => $request->alergi,
            'breed' => $breed,
            'aktivitas' => $request->aktivitas,
            'gambar' => $fotoPrd,
        ]);
        // $produks->save();
        // dd($produks);
        return redirect('/produk')->with('success', 'produk added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function show($id, Produk $produk)
    {
        $produks = Produk::findOrfail($id);
        $category = Category::selectRaw("id, nama")->get();
        $item = Cart::count();
        return view('produk.detail', compact('produks', 'category', 'item'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produks = Produk::find($id);
        $category = Category::selectRaw("id, nama")->get();
        $item = Cart::count();
        return view('produk.edit', compact('produks', 'category', 'item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $produks = Produk::find($id);
        
        if($request->hasFile('gambar')){
            $foto_prd = $request->file('gambar');
            $fotoPrd = $foto_prd->getClientOriginalName();
            $foto_prd->move('uploads/', $fotoPrd);
        }
        $breed=implode(',',$request->get('breed'));
        $usia=implode(',',$request->get('usia'));

        $produks->nama_produk = $request->nama_produk;
        $produks->category_id = $request->category_id;
        $produks->type = $request->type;
        $produks->deskripsi = $request->deskripsi;
        $produks->harga = $request->harga;
        $produks->stok = $request->stok;
        $produks->usia = $usia;
        $produks->alergi = $request->alergi;
        $produks->breed =  $breed;
        $produks->aktivitas = $request->aktivitas;
        $produks->gambar = $fotoPrd;

        $produks->update();

        return redirect('/produk')->with('success', 'produk updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Produk  $produk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produks = Produk::find($id);
        $produks->delete();

        return redirect('/produk')->with('success', 'produk deleted successfully.');
    }
}
