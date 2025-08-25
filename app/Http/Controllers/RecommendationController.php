<?php

namespace App\Http\Controllers;

use App\Models\Food;
use Illuminate\Http\Request;

class RecommendationController extends Controller
{
    public function index()
    {
        $foods = Food::all();
        return view('recommendation.index', compact('foods'));
    }

    public function getFoods(Request $request)
    {
        $petType = $request->input('pet_type');

        $foods = Food::where('pet_type', $petType)->get();

        return response()->json($foods);
    }
}
