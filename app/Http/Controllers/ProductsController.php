<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use CodeCommerce\Product;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class ProductsController extends Controller
{
    private $productModel;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */

    public function __construct(Product $producs)
    {

        $this->productModel = $producs;

    }

    public function index()
    {

        $products = $this->productModel
            ->paginate(10);

        return view('product.index', compact('products'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Category $category)
    {

        $categories = $category->lists('name', 'id');

        return view('product.create', compact('categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\ProductRequest $request)
    {

        $input = $request->all();
        $product = $this->productModel
                         ->fill($input);
        $product->save();
        return redirect()->route('products');

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id, Category $category)
    {
        $categories = $category->lists('name', 'id');

        $product = $this->productModel
            ->find($id);

        return view('product.edit', compact('product', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int $id
     * @return Response
     */
    public function update(Requests\ProductRequest $request, $id)
    {

        $input = $request->all();

        if (!array_key_exists('featured', $input)) {
            $input['featured'] = 0;
        }

        if (!array_key_exists('recommend', $input)) {
            $input['recommend'] = 0;
        }

        $this->productModel->find($id)
            ->update($input);
        return redirect()->route('products');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {

        $product = $this->productModel->find($id)
            ->delete();
        return redirect()->route('products');

    }
}

