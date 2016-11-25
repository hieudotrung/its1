<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user_id = App\User::get();
        $topic_id = App\Topic::get();
        factory(App\News::class, 50)->create()->each(function ($u) use($user_id, $topic_id) {
            $u->update([
                'topic_id' => $topic_id->random(1)->id,
                'user_id' => $user_id->random(1)->id
            ]);
        });
    }
}
