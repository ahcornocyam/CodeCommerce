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
use Faker\Factory as Fake;

class ProductTableSeeder extends Seeder{

    public function run(){
        DB::table('products')->truncate();
        $fake = Fake::create();

        foreach( range(1,15) as $i){
            Product::create(
                [
                    'name'          => $fake->word(),
                    'description'   => $fake->sentence(),
                    'price'         => $fake->randomNumber(2),
                    'featured'      => $fake->boolean(50),
                    'recommend'     => $fake->boolean(50)
                ]
            );
        }
    }

}