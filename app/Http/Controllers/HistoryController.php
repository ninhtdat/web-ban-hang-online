<?php

namespace App\Http\Controllers;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    //
    public function index() {
        $orders = Order::where('user_id', '=', 1);
        return view('frontend.history.history', compact('orders'));
    }
}
