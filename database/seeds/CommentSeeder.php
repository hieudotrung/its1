<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$user_id = App\User::get();
    	$news_id = App\News::get();
        factory(App\Comment::class,50)->create()->each(function($u) use($user_id, $news_id){
        	$u->update([
        		'user_id' => $user_id->random(1)->id,
        		'news_id' => $news_id->random(1)->id
        	]);
        });
    }
}
