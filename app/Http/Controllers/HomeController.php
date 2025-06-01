<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gadgets;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil 4 data pertama
        $gadgets = Gadgets::take(4)->get();
        // Ambil sisa data setelah 4 data pertama
        $recommendedGadgets = Gadgets::skip(4)->take(PHP_INT_MAX)->get();
        // Ambil data kategori untuk navbar
        $categories = Categories::all();

        return view('homepage', compact('gadgets', 'recommendedGadgets', 'categories'));
    }
}
