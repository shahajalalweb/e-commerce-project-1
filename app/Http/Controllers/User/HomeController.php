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

        // Retrieve cart from session, or initialize empty cart
        $cart = session()->get('cart', []);

        // Check if product already exists in the cart
        $existingProduct = collect($cart)->firstWhere('product_id', $request->id);

        return view('user.details', compact('product', 'products' , 'existingProduct'));

    }


    public function addToCart(Request $request)
    {
        // Validate form data
        $request->validate([
            'product_id' => 'required|integer',
            'quantity' => 'required|integer|min:1',
        ]);

        // Extract data from request
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');
        $product = ['product_id' => $productId, 'quantity' => $quantity];

        // Retrieve cart from session, or initialize empty cart
        $cart = session()->get('cart', []);

        // Check if product already exists in the cart
        $existingProduct = collect($cart)->firstWhere('product_id', $productId);

        if ($existingProduct) {
            // Product already in cart, update or just show flash message
            session()->flash('success', 'Product already in your cart.');
        } else {
            // Add product to cart and store in session
            session()->push('cart', $product);
            session()->flash('success', 'Product added to cart.');
        }

        // Redirect back with the session data
        return redirect()->back();
        // return response()->json($cart);
    }


    function CheckCart(Request $request)
    {

        // session()->flush();

        // Retrieve the cart from the session, defaulting to an empty array if not set
        $cart = session()->get('cart', []);

        // Check if the cart is empty and handle it if needed
        if (empty($cart)) {
            // Optional: return a message or handle the case of an empty cart
            return response()->json(['message' => 'Cart is empty']);
        }

        return response()->json($cart);


    }

    public function checkout($id)
    {
        // Fetch product details by ID
        $product = Product::findOrFail($id);

        // Pass the product data to the checkout view
        return view('user.checkout', compact('product'));
    }
}
