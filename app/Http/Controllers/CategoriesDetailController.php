<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Categories;
use App\Models\Product;


class CategoriesDetailController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $products = Product::with(['galleries'])->latest()->get();

        $category = Categories::with(['galleri'])->latest()->get();

        return view('pages.frontend.category', compact('products','category'));
    }

    public function details(Request $request, $slug)
    {
        $products = Product::with(['galleries'])->latest()->get();

        $category = Categories::with(['galleri'])->latest()->get();

        $categories = Categories::where('slug', $slug)->firstOrFail();

        $products = Product::where('categories_id', $categories->id)->paginate($request->input('limit', 12));

        return view('pages.frontend.category', compact('products','category','categories','products'));
    }

}
