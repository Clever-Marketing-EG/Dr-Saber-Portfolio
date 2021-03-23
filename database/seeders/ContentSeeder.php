<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContentSeeder extends Seeder
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
                'position' => 'top_left_surgery_title',
                'content' => 'Top Left Surgery Title',
                'content_ar' => 'عنوان',
            ],
            [
                'position' => 'top_left_surgery_content',
                'content' => 'Top Left Surgery Content',
                'content_ar' => 'محتوى',
            ],
            [
                'position' => 'top_right_surgery_title',
                'content' => 'Top Right Surgery Title',
                'content_ar' => 'عنوان',
            ],
            [
                'position' => 'top_right_surgery_content',
                'content' => 'Top Right Surgery Content',
                'content_ar' => 'محتوى',
            ],
            [
                'position' => 'bottom_left_surgery_title',
                'content' => 'Bottom Left Surgery Title',
                'content_ar' => 'عنوان',
            ],
            [
                'position' => 'bottom_left_surgery_content',
                'content' => 'Bottom Left Surgery Content',
                'content_ar' => 'محتوى',
            ],
            [
                'position' => 'bottom_right_surgery_title',
                'content' => 'Bottom Right Surgery Title',
                'content_ar' => 'عنوان',
            ],
            [
                'position' => 'bottom_right_surgery_content',
                'content' => 'Bottom Right Surgery Content',
                'content_ar' => 'محتوى',
            ],
        );

        DB::table('contents')->insert($data);
    }
}
