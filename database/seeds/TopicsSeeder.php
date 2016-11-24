<?php

use Illuminate\Database\Seeder;

class TopicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	 // \DB::table('topics')->truncate();
        factory(App\Topic::class, 50)->create();
    }
}
