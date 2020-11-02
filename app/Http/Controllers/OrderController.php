<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;

class OrderController extends Controller
{
    public function index()
    {
        $data['brands'] = Brand::all();
        return view('order', $data);
    }
}
