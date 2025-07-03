<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop() {

        $categories = Categories::all()->take(9);
        $products = Products::leftJoin('categories', 'categories.c_id', '=', 'products.c_id')
        ->select('categories.*', 'products.*')
        ->orderBy('products.created_at', 'desc')
        ->get();


        return view('landing.shop', compact('categories', 'products'));
    }
}
