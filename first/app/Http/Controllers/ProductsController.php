<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index() {
        $title = "Welcome to my Cars ";
        $description = "Created by Jones";

        $data = [
            'productOne' => 'iphone',
            'productTwo' => 'sumsung'
        ];

      //compact method
        //  return view('products.index', compact('title', 'description'));
        
//with method
//return view('products.index')->with('title', $title);
//return view('products.index')->with('data', $data);


//directly in the view

return view('products.index', [
    'data' => $data
]);
    }
    public function about() {
        return 'About us page';
    }

    public function show($name) {
        $data = [
            'iphone' => 'iphone',
            'sumsung' => 'sumsung'
        ];
        return view('products.index', [
            'products' => $data[$name] ?? 'product ' . $name . ' does not exist'
        ]);
    }
}


