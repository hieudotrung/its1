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

$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
		'username'       => $faker->name,
		'email'          => $faker->unique()->safeEmail,
		'password'       => $password ?: $password = bcrypt('secret'),
		'is_admin'       => $faker->randomElement([0,1]),
		'remember_token' => str_random(10),
    ];
});
/*----------------faker user model----------------*/

$factory->define(App\Topic::class, function (Faker\Generator $faker) {
    // static $password;

    return [
        'name_topic' => $faker->name,
    ];
});

// vi du
$factory->define(App\Post::class, function ($faker) {
    return [
        'title' => $faker->title,
        'content' => $faker->paragraph,
        'user_id' => function () {
            return factory(App\User::class)->create()->id;
        }
    ];
});
// end vi du

$factory->define(App\Exam::class, function (Faker\Generator $faker) {
    return [
		'name'     => $faker->name,
		'quantity' => $faker->randomElement([10,20,30,40]),
		'time' 	   => $faker->randomElement([45,10,15]),
		'user_id' => 1,
		'topic_id' => 1
 		// // 'user_id'  => function () {
		// // 	return factory(App\Users::class)->create()->id;
		// // }
		// 'topic_id' => function () {
  //           return factory(App\Topics::class)->create()->id;
  //       }
    ];
});