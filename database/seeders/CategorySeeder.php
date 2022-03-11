<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
            [
                "name" => "Fantasy",
                "slug" => "fantasy",
                "description" => "Kategori yang menceritakan tentang kehidupan Fiksi"
            ],
            [
                "name" => "Romance",
                "slug" => "romance",
                "description" => "Kategori yang menceritakan tentang kehidupan Romance"
            ],
            [
                "name" => "Thriller",
                "slug" => "thriller",
                "description" => "Kategori yang menceritakan tentang kehidupan Thriller"
            ],
            [
                "name" => "Education",
                "slug" => "education",
                "description" => "Kategori yang menceritakan tentang kehidupan Education"
            ],
        ]);
    }
}
