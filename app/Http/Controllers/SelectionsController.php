<?php

namespace App\Http\Controllers;

use App\Selection;
use Illuminate\Http\Request;

class SelectionsController extends Controller
{
    public function index()
    {
        $selections = Selection::all();
        return view(' ', compact('selections'));
    }
    
    public function create()
    {
        
    }
    
    public function store(Request $request)
    {
        
    }
    
    public function show(Selection $selection)
    {
        
    }
    
    public function edit(Selection $selection)
    {
        
    }
    
    public function update(Request $request, Selection $selection)
    {
        
    }
    
    public function destroy(Selection $selection)
    {
        
    }
}
