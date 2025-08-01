<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrackCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = ['Demo','Working Version','Master'];

        foreach($categories as $cat){
            DB:table('track_category')->insert([
                'name' => $cat,
            ]);

        }
    }
}
