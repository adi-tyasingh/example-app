<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Song;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Song::create([
            'artist' => 'Eminem',
            'title' => 'Stan',
            'duration'=>'5:32'
        ]);

        Song::create([
            'artist' => 'A P Dhillon',
            'title' => 'With You',
            'duration'=>'3:34'
        ]);

        Song::create([
            'artist' => 'Led Zepplin',
            'title' => 'Stairway to Heaven',
            'duration'=>'8:05'
        ]);

        Song::create([
            'artist' => 'Eagles',
            'title' => 'Hotel California',
            'duration'=>'5:52'
        ]);
    }
}
