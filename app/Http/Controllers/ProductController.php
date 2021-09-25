<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getform()
    {
        return view('form');
    }
    public function submitform(Request $request)
    {
        $store= new Product();
        $store-> first_name = $request->first_name;
        $store-> last_name = $request->last_name;
        $store->save();

    }
}
