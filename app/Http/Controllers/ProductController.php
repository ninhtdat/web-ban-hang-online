<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $product = product::all();
        return view('backend.product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $types = producttype::all();
        return view('backend.product.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            // 'cost' => 'required',
            // 'price' => 'required',
            'type' => 'required',

        ]);
        $product = new product;
        $product->name = $request->name;
        $product->image = $request->image;
        $product->quantity = $request->quantity;
        $product->cost = $request->cost;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->product_type_id = $request->type;
        $product->save();
        return redirect()->route('product.index')
            ->with('success', 'product has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        // $product = product::find($id);
        // return view('product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $product = product::find($id);
        return view('backend.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required',
            'cost' => 'required',
            'price' => 'required',
            'product_type_id' => 'required',

        ]);
        $product = product::find($id);
        $product->name = $request->name;
        $product->image = $request->image;
        $product->quantity = $request->quantity;
        $product->cost = $request->cost;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->product_type_id = $request->product_type_id;
        $product->save();
        return redirect()->route('product.index')
            ->with('success', 'product Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $product = product::find($id);
        $product->delete();
        return redirect()->route('product.index')
            ->with('success', 'product has been deleted successfully');
    }

    
}
