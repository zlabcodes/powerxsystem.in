<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesPageController extends Controller
{
    public function show() {
        return view('pages.services');
    }
}
