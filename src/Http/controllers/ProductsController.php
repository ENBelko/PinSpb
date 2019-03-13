<?php

namespace PinSpb\Products\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PinSpb\Products\Product;


class ProductsController extends Controller
{
    public function index()
    {
        return view('products::index');
    }
}
