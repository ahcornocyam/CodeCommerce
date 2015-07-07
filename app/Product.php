<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table    = 'Products';

    protected $fillable =
        [
            'category_id',
            'id',
            'name',
            'description',
            'price',
            'featured',
            'recommend'
        ];

    public function category(){
        return $this->belongsTo('\CodeCommerce\Category');
    }
}
