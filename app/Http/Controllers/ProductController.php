<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
            'cost' => 'required',
            'price' => 'required',
            'type' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);
        $product = new product;
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->cost = $request->cost;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->product_type_id = $request->type;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            // $imageName = $request->file('image')->getClientOriginalName();
            $product->image = $imageName;
            // $request->image->move(public_path('img'), $imageName);
            $request->image->storeAs('public/images', $imageName);
            // Storage::disk('public')->put('images', $imageName);
        }

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
        $types = ProductType::all();
        return view('backend.product.edit', compact('product', 'types'));
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
            'type' => 'required',
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',

        ]);
        $product = product::find($id);
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->cost = $request->cost;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->product_type_id = $request->type;

        if ($request->hasFile('image')) {
            //delete picture
            if ($product->image != null) {
                $path = storage_path('app/public/images/' . $product->image);
                if (file_exists($path)) {
                    unlink($path);
                }
            }

            $imageName = time() . '.' . $request->image->extension();
            // $imageName = $request->file('image')->getClientOriginalName();
            $product->image = $imageName;
            // $request->image->move(public_path('img'), $imageName);
            $request->image->storeAs('public/images', $imageName);
        }

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
        //delete picture
        if ($product->image != null) {
            $path = storage_path('app/public/images/' . $product->image);

            if (file_exists($path)) {
                unlink($path);
            }
        }

        $product->delete();
        return redirect()->route('product.index')
            ->with('success', 'product has been deleted successfully');
    }
}
