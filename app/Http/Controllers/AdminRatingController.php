<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Rating;
use Illuminate\Http\Request;

class AdminRatingController extends Controller
{
    public function index()
    {
        $ratings = Rating::with(['user', 'gadget'])->get();

        return view('admin.ratings.index', compact('ratings'));
    }
}
