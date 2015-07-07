<?php
/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 06/07/15
 * Time: 21:14
 */

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;
use CodeCommerce\Product;


class ProductTableSeeder extends Seeder{

    public function run(){

        DB::table('products')->truncate();

        factory(Product::class,10)->create();

    }

}