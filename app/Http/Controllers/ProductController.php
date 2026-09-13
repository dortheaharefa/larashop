<?php
namespace App\Http\Controllers;

class ProductController extends Controller
{
    protected $product;
    public function __construct()
    {
        $this->product = ['laptop', 'mouse', 'keyboard'];
    }

    public function index()
    {
        $product = $this->product;
        return view('products.index', compact('product'));
    }

    public function create()
    {
        return "Buat daftar produk";
    }

    public function show($id)
    {
        return view('products.show', [
            'id'      => $id,
            'product' => $this->product[$id-1],
        ]);
    }

}
