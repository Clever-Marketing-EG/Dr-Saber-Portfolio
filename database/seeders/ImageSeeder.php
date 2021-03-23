<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = array(
            [
                'name' => 'header_image_1',
                'url' => 'http://127.0.0.1:8000/assets/images/saber.jpg'
            ],
            [
                'name' => 'header_image_2',
                'url' => 'http://127.0.0.1:8000/assets/images/saber.jpg'
            ],
            [
                'name' => 'header_image_3',
                'url' => 'http://127.0.0.1:8000/assets/images/saber.jpg'
            ],
            [
                'name' => 'home_operations_image',
                'url' => 'http://127.0.0.1:8000/assets/images/saber.jpg'
            ],
            [
                'name' => 'home_news_image',
                'url' => 'http://127.0.0.1:8000/assets/images/saber.jpg'
            ],
            //================================================================
            [
                'name' => 'biography_background_image',
                'url' => 'http://127.0.0.1:8000/assets/images/saber.jpg'
            ],
            [
                'name' => 'biography_side_image_1',
                'url' => 'http://127.0.0.1:8000/assets/images/saber.jpg'
            ],
            [
                'name' => 'biography_side_image_2',
                'url' => 'http://127.0.0.1:8000/assets/images/saber.jpg'
            ],
            //================================================================
            [
                'name' => 'news_background',
                'url' => 'http://127.0.0.1:8000/assets/images/saber.jpg'
            ],
        );
        DB::table('images')->insert($data);
    }
}
