<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show()
    {
        $name = 'Laptops';
        $user = 'guest';
        $userType = $user == 'admin' ? true : false;
        $products = ['ThinkPad', 'Mackbook', 'Dell Latitude', 'HP Elitebook', 'Sony VAIO'];
        $count = count($products);
        return view('product', ['name' => $name, 'userType' => $userType, 'products' => $products, 'count' => $count]);
    }
}
