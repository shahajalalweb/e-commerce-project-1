<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\menu;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::all();
        $products = Product::with('category')->get();
        $menus = menu::all();
        return view('user.home', compact('categories', 'products', 'menus'));
    }

    public function details()
    {
        // $products = Product::with('category')->get();
        return view('user.details');
    }


    public function card(Request $request)
    {
        $product = Product::find($request->id);
        // session()->push('cart', $product);
        return view('user.cart', compact('product'));
        // return session('cart');
    }

    public function detailsProduct(Request $request)
    {
        $product = Product::find($request->id);
        // Get all products, but exclude the current product from the list of related products
        $products = Product::with('category')
            ->where('id', '!=', $product->id) // Exclude the current product by ID
            ->get();
        return view('user.details', compact('product', 'products'));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
