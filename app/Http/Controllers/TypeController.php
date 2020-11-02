<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class TypeController extends Controller
{
    public function index($id)
    {
        $data['id'] = $id;
        $data['types'] = Product::where('brand_id', $id)->get();
        return view('sectionType', $data);
    }
}
