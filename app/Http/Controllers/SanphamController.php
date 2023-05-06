<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanpham;

class SanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $sanpham = Sanpham::all();
        return view('backend.products.index', compact('sanpham'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => 'required',
            'picture' => 'required',
            'giagoc' => 'required',
            'giaban' => 'required',
            'loai' => 'required',

        ]);
        $sanpham = new sanpham;
        $sanpham->sp_ten = $request->name;
        $sanpham->sp_hinh = $request->picture;
        $sanpham->sp_giaGoc = $request->giagoc;
        $sanpham->sp_giaBan = $request->giaban;
        $sanpham->l_ma = $request->loai;
        $sanpham->save();
        return redirect()->route('sanpham.index')
            ->with('success', 'sanpham has been created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $sanpham = sanpham::find($id);
        return view('sanpham.show', compact('sanpham'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $sanpham = sanpham::find($id);
        return view('backend.products.edit', compact('sanpham'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $request->validate([
            'name' => 'required',
        ]);
        $sanpham = sanpham::find($id);
        $sanpham->sp_ten = $request->name;
        $sanpham->sp_hinh = $request->picture;
        $sanpham->sp_giaGoc = $request->giagoc;
        $sanpham->sp_giaBan = $request->giaban;
        $sanpham->l_ma = $request->loai;
        $sanpham->save();
        return redirect()->route('sanpham.index')
            ->with('success', 'sanpham Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $sanpham = sanpham::find($id);
        $sanpham->delete();
        return redirect()->route('sanpham.index')
            ->with('success', 'sanpham has been deleted successfully');
    }
}
