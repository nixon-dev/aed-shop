<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\Products;
use Illuminate\Http\Request;
use Storage;

class LandingController extends Controller
{
    public function index()
    {

        $categories = Categories::all();
        $products = Products::orderBy('created_at', 'desc')->take(12)->get();
        $featured = Products::where('p_featured', 'Yes')->orderBy('created_at', 'DESC')->get();


        return view('landing.index', compact('categories', 'products', 'featured'));
    }

    public function quick_view($slug)
    {
        $p = Products::where('p_slug', $slug)->firstOrFail();

        $price = 0.00;
        if (isset($p->p_price_sale)) {
            $price = number_format($p->p_price_sale, 2);
        } else {
            $price = number_format($p->p_price, 2);
        }

        return response()->json([
            'name' => $p->p_name,
            'description' => $p->p_description ?? '',
            'price' => $price,
            'stock' => $p->p_stock,
            'image' => !empty($p->p_image) ? Storage::url($p->p_image) : asset('assets/products/default.png'),
        ]);

    }

   
}