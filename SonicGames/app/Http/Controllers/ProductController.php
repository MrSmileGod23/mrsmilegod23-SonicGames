<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function allData()
    {
        return view('home',['data'=>Product::inRandomOrder()->limit(6)->get()]);
    }

    public function getGame($slug_publisher,$slug_genre,$slug_game)
    {
        $data = Product::where('slug',$slug_game)->first();
        return view('show-game',[
            'data' => $data
        ]);
    }
}
