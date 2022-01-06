<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category_name' => "Computer",
            'category_description' => "This is a description about the Category",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('categories')->insert([
            'category_name' => "CSS",
            'category_description' => "This is a description about the Category",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
        DB::table('categories')->insert([
            'category_name' => "English",
            'category_description' => "This is a description about the Category",
            'created_at'=>now(),
            'updated_at'=>now()
        ]);
    }
}
