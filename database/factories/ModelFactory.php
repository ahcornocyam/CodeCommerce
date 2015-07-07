<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/*
 * user factory
 */
$factory->define(CodeCommerce\User::class, function ($faker) {
    return
        [
            'name'              => $faker->name,
            'email'             => $faker->email,
            'password'          => str_random(10),
            'remember_token'    => str_random(10),
        ];
});

/*
 * category factory
 */
$factory->define(\CodeCommerce\Category::class, function($faker){
    return
        [
            'name'          => $faker-> word(),
            'description'   => $faker-> sentence()
        ];
});


/*
 * product factory
 */
$factory->define(\CodeCommerce\Product::class, function($faker){
    return
        [
            'name'          => $faker->word(),
            'description'   => $faker->sentence(),
            'price'         => $faker->randomNumber(2),
            'featured'      => $faker->boolean(50),
            'recommend'     => $faker->boolean(50),
            'category_id'   => $faker->numberBetween(1,10),
        ];
});