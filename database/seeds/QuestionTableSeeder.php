<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    public function run()
    {
        $users = App\User::all();
        for ($i = 1; $i <= 16; $i++) {
            $users->each(function ($user){
                $question = factory(\App\Question::class)->make();
                $question->user()->associate($user);
                $question->save();
            });
        }
    }
}
