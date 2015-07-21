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
    /*
     * Relacionando com tags
     */
    public function tags(){
        return $this->belongsToMany('\CodeCommerce\Tag');
    }

    /*
     * Attribute Name-Description
     */

    public function getNameDescriptionAttribute(){

        return $this->name.'-'.$this->description;
    }

    /*
     * listagem de tags de um produto     *
     */
    public function getTagListAttribute(){
        $tag = $this->tags()->list('name');
        return implode(',',$tag);
    }

}
