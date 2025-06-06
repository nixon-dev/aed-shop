<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public function list(Request $request)
    {
        $search = $request->input('search');

        $data = Categories::when($search, function ($query, $search) {
            return $query->where('c_name', 'like', "%{$search}%")
                ->orWhere('c_description', 'like', "%{$search}%");
        })
            ->paginate(10)
            ->withQueryString();

        return view('dashboard.admin.categories', compact('data', 'search'));
    }

    public function add()
    {
        return view('dashboard.admin.categories-add');
    }
}