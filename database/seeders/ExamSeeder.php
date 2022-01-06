<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exams')->insert([
            'exam_name' => "Computer",
            'exam_description' => "This is a description about the Category",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('exams')->insert([
            'exam_name' => "CSS",
            'exam_description' => "This is a description about the Category",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('exams')->insert([
            'exam_name' => "English",
            'exam_description' => "This is a description about the Category",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
