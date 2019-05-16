<?php

use Illuminate\Database\Seeder;

class AnswersTableSeeder extends Seeder
{
    public function run()
    {
        $users = App\User::inRandomOrder();
        $users->each(function ($user) {
            $question = App\Question::inRandomOrder()->first();
            $answer = factory(\App\Answer::class)->make();
            $answer->user()->associate($user);
            $answer->question()->associate($question);
            $answer->save();
        });
    }
}
