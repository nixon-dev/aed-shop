<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{
    public function list()
    {

        return view('dashboard.admin.orders');
    }

    public function track()
    {
        return view('dashboard.admin.orders-track');
    }
}