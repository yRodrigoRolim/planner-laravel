<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Note;


class noteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=0; $i < 2; $i++) { 
            Note::create([
                'name' => fake()->name(),
                'image' => 'img-1.jpg',
                'data' => fake()->date($format = 'Y-m-d'),
                'hour' => fake()->time($format = 'H:i'),
                'type_id' => '1',
            ]);
        }
    }
}
