<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RegistrasiController extends Controller
{
    public function index()
    {
        return view('registrasi.index');
    }
    public function store(Request $request)
    {
        $user = User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'noHp' => $request->noHp,
            'alamat' => $request->alamat,
        ]);
        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }
}
