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


    /*
     *  Relacionamento com category
     */
    public function category(){
        return $this->belongsTo('\CodeCommerce\Category');
    }

    /*
     * Relacionamento com ProductImage
     */
    public function images(){

        return $this->hasMany('\CodeCommerce\ProductImage');
    }
}
