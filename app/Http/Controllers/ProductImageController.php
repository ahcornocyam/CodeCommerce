<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Product;
use CodeCommerce\ProductImage;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class ProductImageController extends Controller
{
    protected $productModel;
    protected $productImagesModel;

    public function __construct(Product $product, ProductImage $image){
        $this   ->productModel         = $product;
        $this   ->productImagesModel   = $image;
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response**
     */
    public function index($id)
    {
        $product    = $this->productModel->find($id);

        return view('images.index',compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($id)
    {
        //
        $product    = $this->productModel->find($id);

        return view('images.create',compact('product'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Requests\ProductImageRequest $request,$id)
    {

        $file       = $request->file('image');
        $extension  = $file->getClientOriginalExtension();
        $image      = $this->productImagesModel->create(['product_id'=>$id,'extension'=>$extension]);
        Storage::disk('public_local')->put($image->id.'.'.$extension,File::get($file));

        return redirect()->route('images',['id'=>$id]);

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $image          = $this->productImagesModel->find($id);
        $product_id     = $image->product_id;

        if(file_exists(public_path().'/uploads/'.$image->id.'.'.$image->extension)){
            Storage::disk('public_local')->delete($image->id.'.'.$image->extension);
        }

        $image->delete();

        return redirect()->route('images',['id'=>$product_id]);
    }
}
