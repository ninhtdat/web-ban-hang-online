<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductType;

class ProductTypeController extends Controller
{
    //
    public function index()
    {
        //
        $ProductType = ProductType::all();
        return view('backend.product-type.index', compact('ProductType'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.product-type.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required|unique:App\Models\ProductType,name',
        ]);
        $ProductType = new ProductType;
        $ProductType->name = $request->name;
        $ProductType->save();
        return redirect()->route('product-type.index')
            ->with('success', 'Thêm mới loại sản phẩm thành công!');
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
        $ProductType = ProductType::find($id);
        return view('backend.product-type.edit', compact('ProductType'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required|unique:App\Models\ProductType,name,'.$id.',id', 
        ]);
        $ProductType = ProductType::find($id);
        $ProductType->name = $request->name;
        $ProductType->save();
        return redirect()->route('product-type.index')
            ->with('success', 'Cập nhật loại sản phẩm thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $type = ProductType::find($id);
        $type->delete();
        return redirect()->route('product-type.index')
            ->with('success', 'Xóa loại sản phẩm thành công!');
    }

}