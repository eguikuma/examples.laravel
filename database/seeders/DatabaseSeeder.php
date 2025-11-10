<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Snippets;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            Snippets\UserSeeder::class,
        ]);
    }
}
