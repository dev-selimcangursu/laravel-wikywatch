<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('client.products.index');
    }

    public function detail()
    {
        return view('client.products.edit');
    }
}
