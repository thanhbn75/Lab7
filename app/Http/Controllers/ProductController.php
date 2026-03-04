<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function list()
    {
        $products = [
            ['name' => 'iPhone 15 Pro Max', 'price' => 30000000],
            ['name' => 'Samsung Galaxy S24', 'price' => 25000000],
            ['name' => 'Xiaomi Redmi Note 13', 'price' => 5000000],
            ['name' => 'Oppo Reno 11', 'price' => 9000000],
        ];

        return view('products', compact('products'));
    }
}