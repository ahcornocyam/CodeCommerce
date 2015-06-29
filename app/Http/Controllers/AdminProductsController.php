<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class AdminProductsController extends Controller
{
    private $products;

    public function __construct(Product $product){
        $this->products = $product;
    }
    public function index()
    {
        $products = $this->products->all();
        return view('product.product',compact('products'));
    }

    public function detail($id){
        $product = $this->products->find($id);
        $resp = null;
        ($product)? $resp = $product->all : $resp = 'Id nao encontrada';
        return $resp;
    }
}
