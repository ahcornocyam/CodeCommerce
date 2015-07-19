<?php
/**
 * Created by PhpStorm.
 * User: alexroch
 * Date: 16/07/15
 * Time: 18:15
 */
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use CodeCommerce\Tag;

class TagTableSeeder extends Seeder {
    public function run(){

        DB::table('tags')->truncate();

        factory(Tag::class,10)->create();

    }
}