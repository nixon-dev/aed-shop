<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Products;
use Exception;
use Illuminate\Http\Request;
use Log;
use Str;

class ProductController extends Controller
{
    public function list(Request $request)
    {

        $search = $request->input('search');

        $data = Products::leftJoin('categories', 'categories.c_id', '=', 'products.c_id')
            ->when($search, function ($query, $search) {
                return $query->where('p_name', 'like', "%{$search}%")
                    ->orWhere('p_description', 'like', "%{$search}%")
                    ->orWhere('c_name', 'like', "%{$search}%");
            })
            ->orderBy('products.created_at', 'DESC')
            ->paginate(10)
            ->withQueryString();

        return view('dashboard.admin.products', compact('data', 'search'));
    }

    public function form()
    {

        $categories = Categories::all();
        return view('dashboard.admin.products-add', compact('categories'));
    }

    public function add(Request $request)
    {

        try {
            $request->validate([
                'product_name' => 'required|string',
                'category_id' => 'required|numeric',
                'regular_price' => 'required|numeric|min:0',
                'sale_price' => 'required|numeric|min:0',
                'sku' => 'required|numeric|min:0',
                'quantity' => 'required|integer|min:0',
                'product_image' => 'nullable|image|mimes:jpeg,png,jpg,svg,webp|max:10240',
            ]);

            $imagePath = null;

            if ($request->hasFile('product_image')) {
                $imagePath = $request->file('product_image')->store('products', 'public');
            }

            // First create the basic slug
            $slug = Str::slug($request->product_name);

            // Check if it exists
            $originalSlug = $slug;
            $counter = 1;
            while (Products::where('p_slug', $slug)->exists()) {
                $slug = $originalSlug . '-' . $counter;
                $counter++;
            }

            $product = Products::create([
                'c_id' => $request->category_id,
                'p_name' => $request->product_name,
                'p_slug' => Products::generateUniqueSlug($request->product_name),
                'p_description' => $request->description ?? null,
                'p_price' => $request->regular_price,
                'p_price_sale' => $request->sale_price ?? null,
                'p_sku' => $request->sku,
                'p_stock' => $request->quantity,
                'p_featured' => $request->featured,
                'p_image' => $imagePath ?? null,
            ]);

            return response()->json([
                'success' => 'Product added successfully!',
                'product' => $product
            ], 201);
        } catch (Exception $e) {
            Log::error('Error adding product: ' . $e->getMessage());
            return response()->json(['error' => 'Failed to add product. Please try again.'], 500);
        }
    }

    public function view($slug)
    {

        $check = Products::where('p_slug', $slug)->exists();

        if (!$check) {
            return redirect()->route('admin.products')->with('error', "Product doesn't exists!");
        }

        $data = Products::where('p_slug', $slug)->first();

        return view('dashboard.admin.products-view', compact('data'));
    }

}