<?php

use Illuminate\Database\Seeder;

class AnswerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $question = App\Question::get();
        factory(App\Answer::class, 50)->create()->each(function($u) use ($question) {
            $u->questions()->attach($question->pluck('id')->random(5)->all());
        });
    }
}
