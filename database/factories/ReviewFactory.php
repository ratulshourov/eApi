<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Review::class, function (Faker $faker) {
    return [
    	'product_id'=>function() {
    		return App\Model\Product::all()->random();
    	},
    	'customer'=>$faker->word,
    	'review'=>$faker->word,
    	'star'=>$faker->numberBetween(0,5),
        //
    ];
});
