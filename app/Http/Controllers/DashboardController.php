<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\gadgets;

class DashboardController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            return redirect('/login')->withErrors(['unauthorized' => 'Silakan login terlebih dahulu']);
        }

        $user = Auth::user();
        if ($user->role === 'admin') {
            return redirect()->route('admin.gadgets.dashboard');
        } else
            $gadgets = Gadgets::take(4)->get();
        $recommendedGadgets = Gadgets::skip(4)->take(PHP_INT_MAX)->get();

        return view('user.homepage', compact('gadgets', 'recommendedGadgets'));
    }
}
