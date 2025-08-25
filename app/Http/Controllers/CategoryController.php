<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\Cart;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function category($id)
    {
        $categories = Category::all();
        if ($id==0) {
            $produks = Produk::paginate(5);
        }else {
            $produks = Produk::where('category_id', $id)->paginate(5);
        }
        $item = Cart::where('user_id', Auth::user()->id)->count();
        return view ('produk.index', compact('produks', 'categories', 'id', 'item'));
    }
}
