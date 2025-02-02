<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CommanController extends Controller
{
    public function getProducts()
    {
        // Fetch all products from the Product model
        $products = Product::all();

        // Return the products as JSON response
        return response()->json($products);
    }
}
