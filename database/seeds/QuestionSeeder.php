<?php

use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $exam_id = App\Exam::get();
        factory(App\Question::class, 50)->create()->each(function($u) use($exam_id) {
            $u->update([
                'exam_id' => $exam_id->random(1)->id
            ]);
        });
    }
}
