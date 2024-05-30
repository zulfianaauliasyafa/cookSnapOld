<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function index()
    {
        // Mengambil jumlah total produk dari database
        $totallagu = Music::count();
        $totaluser = User::count();
        $username = Auth::user()->name;
        
        $userall = User::all();

        // Mengirimkan data total produk ke tampilan
        return view('admin.index', compact('totallagu','totaluser','username','userall'));
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function orders()
    {
        
        $username = Auth::user()->name;
        return view('admin.orders', compact('username'));
    }

    public function profil()
    {
        // Mengambil jumlah total produk dari database
        $totallagu = Music::count();
        $totaluser = User::count();
        $username = Auth::user()->name;
        
       
        $userall = User::all();

        // Mengirimkan data total produk ke tampilan
        return view('admin.profile', compact('totallagu','totaluser','username','userall'));
    }

    
}
