<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questions')->insert([
            'question_name' => "Q1: What is the full form of CPU?",
            'exam_id' => 1,
            'answer_one' => ". Central Progressive Unit",
            'answer_two' => ". Central Programming Unit",
            'answer_three' => ". Central Processing Unit",
            'answer_correct' => ". Central Process Unit",
            'user_id' => "This is a description about the Category",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('questions')->insert([
            'question_name' => "Q2:Who are you",
            'exam_id' => 1,
            'answer_one' => ". Central Progressive Unit",
            'answer_two' => ". Central Programming Unit",
            'answer_three' => ". Central Processing Unit",
            'answer_correct' => ". Central Process Unit",
            'user_id' => "This is a description about the Category",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('questions')->insert([
            'question_name' => "Q3:how old are you",
            'exam_id' => 1,
            'answer_one' => ". Central Progressive Unit",
            'answer_two' => ". Central Programming Unit",
            'answer_three' => ". Central Processing Unit",
            'answer_correct' => ". Central Process Unit",
            'user_id' => "This is a description about the Category",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('questions')->insert([
            'question_name' => "Q4: Tell me about yourseld",
            'exam_id' => 1,
            'answer_one' => ". Central Progressive Unit",
            'answer_two' => ". Central Programming Unit",
            'answer_three' => ". Central Processing Unit",
            'answer_correct' => ". Central Process Unit",
            'user_id' => "This is a description about the Category",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('questions')->insert([
            'question_name' => "Q5:All the answer are correct",
            'exam_id' => 1,
            'answer_one' => ". Central Progressive Unit",
            'answer_two' => ". Central Programming Unit",
            'answer_three' => ". Central Processing Unit",
            'answer_correct' => ". Central Process Unit",
            'user_id' => "This is a description about the Category",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
