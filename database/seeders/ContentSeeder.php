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
                'position' => 'home_operations_description',
                'content' => 'content',
                'content_ar' => 'محتوى',
            ],
            [
                'position' => 'home_news_description',
                'content' => 'content',
                'content_ar' => 'محتوى',
            ],
            //=======================================================================
            [
                'position' => 'biography_title_1',
                'content' => 'content',
                'content_ar' => 'محتوى',
            ],
            [
                'position' => 'biography_content_1',
                'content' => 'content',
                'content_ar' => 'محتوى',
            ],
            [
                'position' => 'biography_title_2',
                'content' => 'content',
                'content_ar' => 'محتوى',
            ],
            [
                'position' => 'biography_content_2',
                'content' => 'content',
                'content_ar' => 'محتوى',
            ],
            //=======================================================================
            [
                'position' => 'footer_description',
                'content' => 'content',
                'content_ar' => 'محتوى',
            ],
            [
                'position' => 'phone_number',
                'content' => '0123456789',
                'content_ar' => '٠١٢٣٤٥٦٧٨٩',
            ],
            [
                'position' => 'email',
                'content' => 'admin@dr-saber-waheeb.com',
                'content_ar' => 'admin@dr-saber-waheeb.com',
            ],
            [
                'position' => 'address',
                'content' => 'El-Gaish Rd, Al Mesallah Sharq, Al Attarin, Alexandria Governorate',
                'content_ar' => 'طريق الجيش، المسلة شرق، العطارين، محافظة الإسكندرية',
            ],
            [
                'position' => 'facebook_link',
                'content' => 'https://www.facebook.com/prof.dr.saberwaheeb/',
                'content_ar' => 'https://www.facebook.com/prof.dr.saberwaheeb/',
            ],
        );

        DB::table('contents')->insert($data);
    }
}
