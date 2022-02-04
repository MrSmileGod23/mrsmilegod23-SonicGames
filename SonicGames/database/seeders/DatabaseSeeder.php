<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            [
                'name' => 'Администратор',
                'slug' => 'admin',
            ], [
                'name' => 'Пользователь',
                'slug' => 'user',
            ]
        ]);
        DB::table('genres')->insert([
            [
                'name' => 'Action',
                'slug' => 'genre-Action',
            ],
            [
                'name' => 'Adventure',
                'slug' => 'genre-Adventure',
            ],
            [
                'name' => 'Fighting',
                'slug' => 'genre-Fighting',
            ],
            [
                'name' => 'Platform',
                'slug' => 'genre-Platform',
            ],
            [
                'name' => 'Puzzle',
                'slug' => 'genre-Puzzle',
            ],
            [
                'name' => 'Racing',
                'slug' => 'genre-Racing',
            ],
            [
                'name' => 'RPG',
                'slug' => 'genre-RPG',
            ],
            [
                'name' => 'Action RPG',
                'slug' => 'genre-ActionRPG',
            ],
            [
                'name' => 'Sports',
                'slug' => 'genre-Sports',
            ],
            [
                'name' => 'Strategy',
                'slug' => 'genre-Strategy',
            ],
            [
                'name' => 'Simulator',
                'slug' => 'genre-Simulator',
            ]
        ]);
        DB::table('publishers')->insert([
            [
                'name' => 'Electronic Arts',
                'slug' => 'publisher-ElectronicArts',
            ],
            [
                'name' => 'Mihoyo',
                'slug' => 'publisher-Mihoyo',
            ],
            [
                'name' => 'Rockstar Games',
                'slug' => 'publisher-Rockstar',
            ],
            [
                'name' => 'Ubisoft Entertainment',
                'slug' => 'publisher-Ubisoft',
            ],
            [
                'name' => 'Bethesda Softworks',
                'slug' => 'publisher-Bethesda',
            ],
            [
                'name' => 'CD Projekt RED',
                'slug' => 'publisher-CDProjektRED',
            ],
            [
                'name' => 'Bandai Namco Entertainment',
                'slug' => 'publisher-BandaiNamcoEntertainment',
            ],
            [
                'name' => 'Activision',
                'slug' => 'publisher-Activision',
            ],
            [
                'name' => 'Square Enix',
                'slug' => 'publisher-SquareEnix',
            ],
            [
                'name' => 'Capcom',
                'slug' => 'publisher-Capcom',
            ],
            [
                'name' => 'Sega',
                'slug' => 'publisher-Sega',
            ],
            [
                'name' => '505 Games',
                'slug' => 'publisher-505Games',
            ],
            [
                'name' => 'Blizzard Entertainment',
                'slug' => 'publisher-BlizzardEntertainment',
            ],
        ]);
    }
}
