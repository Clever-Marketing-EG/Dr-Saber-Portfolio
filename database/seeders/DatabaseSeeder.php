<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ContentSeeder::class,
            ArticleSeeder::class,
            OperationSeeder::class,
            ResearchSeeder::class,
            ImageSeeder::class,
            CertificateSeeder::class
//            MediaSeeder::class
        ]);
    }
}
