<?php

namespace Database\Seeders;

use App\Models\Note;
use App\Models\Type;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(noteSeeder::class);
    }
}
