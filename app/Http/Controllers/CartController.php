<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        // $cart = $request->session()->get('cart');
        // $request->session()->forget('cart');
        return view('frontend.shop.cart');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "id" => $id,
                "type" => $product->type->name,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // $request->validate([
        //     'name' => 'required',
        //     'phone' => 'required',
        //     'address' => 'required',
        //     'email' => 'required',
        // ]);
        // $customer = new Customer;
        // $customer->name = $request->name;
        // $customer->phone = $request->phone;
        // $customer->email = $request->email;
        // $customer->address = $request->address;
        // $customer->save();

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
    public function edit(Request $request, string $name)
    {
        //
        $cart = $request->session()->get('cart');
        $key = array_column($cart, 0);

        if (!($index = array_search($name, $key))) {
            $cart[$index][$name] = $request->quantity;
        }
        $request->session()->put('cart', $cart);
        return redirect()->route('cart');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity'] = $request->quantity;
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function delete($id)
    {
        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product remove to cart successfully!');
    }
}
