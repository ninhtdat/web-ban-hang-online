<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sumUser = User::count() - 1;
        $sumOrder = Order::count();
        $sumOrderOfUser = Order::where('user_id', '<>', null)->count();
        //Tong doanh thu
        $details = OrderDetail::all();
        $total = 0;
        foreach ($details as $detail) {
            if ($detail->order->delivery == 2 && $detail->order->pay == 1) {
                $total += $detail->quantity * $detail->product->price;
            }
        }
        //Tong doanh thu thang nay
        $thisMonthDetails = OrderDetail::whereMonth('created_at', Carbon::now()->format('m'))
            ->whereYear('created_at', Carbon::now()->format('Y'))
            ->get();
        $thisMonthTotal = 0;
        foreach ($thisMonthDetails as $detail) {
            if ($detail->order->delivery == 2 && $detail->order->pay == 1) {
                $thisMonthTotal += $detail->quantity * $detail->product->price;
            }
        }

        //Doanh thu tung thang trong 6 thang gan nhat
        $sixMonths = [];
        for ($i = 0; $i < 6; $i++) {
            $sixMonths[] = $this->total($i);
        }
        // dd($sixMonths);
        return view('backend.report.index', compact('sumUser', 'sumOrder', 'sumOrderOfUser', 'total', 'thisMonthTotal', 'sixMonths'));
    }

    public function total(int $subMonths)
    {
        $thisMonthDetails = OrderDetail::whereMonth('created_at', Carbon::now()->subMonths($subMonths)->format('m'))
            ->whereYear('created_at', Carbon::now()->format('Y'))
            ->get();
        $thisMonthTotal = 0;
        foreach ($thisMonthDetails as $detail) {
            if ($detail->order->delivery == 2 && $detail->order->pay == 1) {
                $thisMonthTotal += $detail->quantity * $detail->product->price;
            }
        }
        return $thisMonthTotal;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
