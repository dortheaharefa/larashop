<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        return view('products.index');
    }

    public function create(){
        return "Buat daftar produk";
    }

    public function detail($id){
        return 'Product' . $id;
    }
    
}
