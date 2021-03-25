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
                'url' => 'https://images.pexels.com/photos/3825586/pexels-photo-3825586.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'
            ],
            [
                'name' => 'header_image_2',
                'url' => 'https://images.pexels.com/photos/3825586/pexels-photo-3825586.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'
            ],
            [
                'name' => 'header_image_3',
                'url' => 'https://images.pexels.com/photos/3825586/pexels-photo-3825586.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'
            ],
            [
                'name' => 'home_operations_image',
                'url' => 'https://images.pexels.com/photos/3825586/pexels-photo-3825586.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'
            ],
            [
                'name' => 'home_news_image',
                'url' => 'https://images.pexels.com/photos/3825586/pexels-photo-3825586.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'
            ],
            //================================================================
            [
                'name' => 'biography_background_image',
                'url' => 'https://images.pexels.com/photos/3825586/pexels-photo-3825586.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'
            ],
            [
                'name' => 'biography_side_image_1',
                'url' => 'https://images.pexels.com/photos/3825586/pexels-photo-3825586.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'
            ],
            [
                'name' => 'biography_side_image_2',
                'url' => 'https://images.pexels.com/photos/3825586/pexels-photo-3825586.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'
            ],
            //================================================================
            [
                'name' => 'news_background',
                'url' => 'https://images.pexels.com/photos/3825586/pexels-photo-3825586.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'
            ],
            //================================================================
            [
                'name' => 'media_background',
                'url' => 'https://images.pexels.com/photos/3825586/pexels-photo-3825586.jpeg?auto=compress&cs=tinysrgb&h=750&w=1260'
            ],
        );
        DB::table('images')->insert($data);
    }
}
