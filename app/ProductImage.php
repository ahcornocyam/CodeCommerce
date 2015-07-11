<?php

namespace CodeCommerce;

use Illuminate\Database\Eloquent\Model;

class ProductImage extends Model
{
    //
    protected $table        = 'product_images';
    protected $fillable     =
                                [
                                    'product_id',
                                    'extension'
                                ];

    /*
     * Relacionamento com Product
     */
    public function product(){

        return $this->belongsTo('\CodeCommerce\Product');

    }
}
