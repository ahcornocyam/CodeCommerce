<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table    = 'Products';

    protected $fillable = ['id','name','description','price','featured','recommend'];
}
