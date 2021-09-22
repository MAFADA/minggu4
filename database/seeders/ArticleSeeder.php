<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'title' => 'Belajar Model Dengan Laravel',            
            'content' => 'Dummy data dibuat diisi oleh Seeder',
            'image' =>'https://via.placeholder.com/640x480.png/00ff77?text=BelajarModel',                        
        ]);
    }
}
