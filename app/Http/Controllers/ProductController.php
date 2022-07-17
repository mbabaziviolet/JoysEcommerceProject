<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

use Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //
    function index()
    {

       return view('product');
    }
}
