<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
       $product = ['laptop', 'mouse', 'keyboard'];
        return view('products.index', compact('product'));
    }

    public function create(){
        return "Buat daftar produk";
    }

    public function detail($id){
        return 'Product' . $id;
    }
    
}
