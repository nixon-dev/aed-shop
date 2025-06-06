<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $totalOrders = Orders::count();
        $totalAmount = Orders::sum('total_amount');
        $deliveredOrders = Orders::where('o_status', 'Delivered')->count();
        $totalDeliveredAmount = Orders::where('o_status', 'Delivered')->sum('total_amount');

        $pendingOrders = Orders::where('o_status', 'Pending')->count();
        $totalPendingAmount = Orders::where('o_status', 'Pending')->sum('total_amount');
        $cancelledOrders = Orders::where('o_status', 'Cancelled')->count();
        $totalCancelledAmount = Orders::where('o_status', 'Cancelled')->sum('total_amount');

        return view('dashboard.admin.index', compact('totalOrders', 'totalAmount', 'deliveredOrders', 'totalDeliveredAmount', 'pendingOrders', 'totalPendingAmount', 'cancelledOrders', 'totalCancelledAmount'));
    }

    public function users()
    {
        return view('dashboard.admin.users');
    }

    public function settings()
    {
        return view('dashboard.admin.settings');
    }
}