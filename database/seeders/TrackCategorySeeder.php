<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class TrackCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $categories = ['Demo','Working Version','Master'];

        foreach ($categories as $cat) {
            $exists = DB::table('track_categories')
                        ->where('name', $cat)
                        ->exists();

            if (!$exists) {
                DB::table('track_categories')->insert([
                    'name' => $cat,
                ]);
            }
        }

    }
}
