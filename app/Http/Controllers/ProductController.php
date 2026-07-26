<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show(string $category = null)
    {
        return "Product category = $category";
    }
}
