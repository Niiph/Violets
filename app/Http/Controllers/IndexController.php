<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;

class IndexController extends Controller
{
    public function index()
    {
        $plants = Plant::inRandomOrder()
        ->limit(6)
        ->get();

        return view('index', [
            'plants' => $plants
        ]);
    }
}
