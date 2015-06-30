<?php

namespace CodeCommerce\Http\Controllers;

use CodeCommerce\Category;
use Illuminate\Http\Request;

use CodeCommerce\Http\Requests;
use CodeCommerce\Http\Controllers\Controller;

class AdminCategoriesController extends Controller
{

    private $categories;

    public function __construct(Category $categories){
        $this->categories = $categories;
    }

    public function index()
    {
        $categories = $this->categories->all();
        return view('category.category',compact('categories'));
    }

    public function read($id){
        $category = $this->categories->find($id);
        ($category)? $resp = $category->all(): $resp = 'Id nao encontrada';
        return $resp;
    }
}
