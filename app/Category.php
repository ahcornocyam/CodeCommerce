<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{

    protected $table    = 'Categories';

    protected $fillable =
                            [
                                'id',
                                'name',
                                'description'
                            ];

    /*
     *  Relacionamento com Product
     */
    public function products(){

        return $this->hasMany('CodeCommerce\Product');
    }
}
