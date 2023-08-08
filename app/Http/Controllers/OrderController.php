<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $orders = Order::all();
        $details = OrderDetail::all();
        return view('backend.order.index', compact('orders', 'details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('backend.order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $order = Order::find($id);
        $details = Order::find($id)->orderDetails;
        return view('backend.order.detail', compact('order', 'details'));
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
        $order = order::find($id);
        $order->pay = $request->pay;
        if ($order->delivery != 0 && $request->delivery == 0) {
            $details = Order::find($id)->orderDetails;
            foreach ($details as $detail) {
                $product = Product::find($detail->product_id);
                $product->quantity += $detail->quantity;
                $product->save();
            }
        } elseif ($order->delivery == 0 && ($request->delivery == 1 || $request->delivery == 2)) {
            $details = Order::find($id)->orderDetails;
            foreach ($details as $detail) {
                $product = Product::find($detail->product_id);
                if ($product->quantity >= $detail->quantity) {
                    $product->quantity -= $detail->quantity;
                } else {
                    return back()->withErrors("Số lượng sản phẩm trong kho không đủ!");
                }
                $product->save();
            }
        }
        $order->delivery = $request->delivery;
        $order->save();


        return back()->with('success', 'Cập nhật đơn hàng thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $order = Order::find($id);
        if ($order->delivery != 0) {
            $details = Order::find($id)->orderDetails;
            foreach ($details as $detail) {
                $product = Product::find($detail->product_id);
                $product->quantity += $detail->quantity;
                $product->save();
            }
        }
        $order->orderDetails()->delete();
        $order->delete();
        return redirect()->route('order.index')
            ->with('success', 'Hủy đơn hàng thành công!');
    }
}
