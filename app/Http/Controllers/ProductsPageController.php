<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsPageController extends Controller
{
    public function show() {
        return view('pages.products');
    }
}
