<?php

namespace Database\Seeders;

use App\Models\Conference;
use Faker\Provider\Lorem;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        (new Conference())->insert([
            [
                'title' => Lorem::sentence(10),
                'content' => Lorem::text(),
                'date' => now(),
                'address' => Lorem::sentence(12),
                'participants' => Lorem::numberBetween(2,15)
            ]
        ]);
    }
}
