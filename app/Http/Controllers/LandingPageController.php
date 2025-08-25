<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $produks = Produk::take(1)->get(); // Ambil semua produk dari database

        return view('landing-page', compact('produks'));
    }
}
