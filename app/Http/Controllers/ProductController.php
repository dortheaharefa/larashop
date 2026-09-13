<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

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

    public function create(Request $Request)
    {
        return view('products.create');
    }

    public function store(Request $Request)
    {
        $nama = $Request->nama;
        return ('Data Berhasil diterima yaitu ' . $nama);
    }

    public function show($id)
    {
        return view('products.show', [
            'id'      => $id,
            'product' => $this->product[$id - 1],
        ]);
    }

}
