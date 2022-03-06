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

    public function getPreOrder()
    {
        $ldate = date('Y-m-d');

        $data = Product::where('release','>',$ldate)->inRandomOrder()->paginate(4);
        return view('preorder',[
            'data' => $data
        ]);
    }

    public function getStocks()
    {
        $data = Product::where('discount','>',0)->inRandomOrder()->limit(3)->get();
        $dataMin = Product::orderBy('price','asc')->orderBy('discount','desc')->inRandomOrder()->limit(6)->get();
        return view('stocks',[
            'data' => $data,
            'dataMin' => $dataMin

        ]);
    }
}
