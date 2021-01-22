<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Seeding categories from \database\seeders\CategorySeeder');

        DB::table('categories')->insert([
            'name' => 'Role Playing Games',
            'image_url' => 'https://img.wallpapersafari.com/desktop/1920/1080/69/73/d9TRDv.jpg'
        ]);

        DB::table('categories')->insert([
            'name' => 'Firts Person Shooters',
            'image_url' => 'https://wallpaper2017.files.wordpress.com/2016/12/battlefield-4-siege-of-shanghai-1920x1080.jpg'
        ]);

        DB::table('categories')->insert([
            'name' => 'Puzzle Games',
            'image_url' => 'https://wallpaper2017.files.wordpress.com/2016/12/2011-portal-2-game-1920x1080.jpg'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sandbox Games',
            'image_url' => 'https://w.wallha.com/ws/5/Lg2CnGRx.jpg'
        ]);

        DB::table('categories')->insert([
            'name' => 'Zombie Games',
            'image_url' => 'https://www.wallpaperflare.com/static/408/641/90/dying-light-video-games-apocalyptic-zombies-wallpaper.jpg'
        ]);
    }
}
