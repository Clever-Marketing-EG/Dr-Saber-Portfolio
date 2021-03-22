<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\ArticleImage;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Article::factory(100)
            ->has(ArticleImage::factory()->count(5))
            ->create();
    }
}
