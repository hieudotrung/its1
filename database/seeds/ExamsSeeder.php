<?php

use Illuminate\Database\Seeder;

class ExamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void

     */
   
    public function run()
    {
        $topic_id = App\Topic::get();
        $user_id  = App\User::get();
        factory(App\Exam::class, 50)->create()->each(function ($u) use ($topic_id, $user_id) {
            $u->update([
                    'topic_id' => $topic_id->random(1)->id,
                    'user_id'  => $user_id->random(1)->id
             ]);
        });

        //dd($topic_id);
        	
        // });
    }
}
