<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->command->info('Seeding products from \database\seeders\ProductSeeder');

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'The Witcher: Wild Hunt',
            'image_url' => 'https://1.bp.blogspot.com/-yGH7VCRDB_8/XT5xVc2SQYI/AAAAAAAATd0/LfUSqsP8yhYbuHY85jkhXMgP0A30ZxhugCLcBGAs/s2560/the-witcher-wild-hunt-4k-86-1080x1920.jpg',
            'description' => "The Witcher: Wild Hunt is a story-driven open world RPG set in a visually stunning fantasy universe full of meaningful choices and impactful consequences. In The Witcher, you play as professional monster hunter Geralt of Rivia tasked with finding a child of prophecy in a vast open world rich with merchant cities, pirate islands, dangerous mountain passes, and forgotten caverns to explore.",
            'price' => 29.99
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Battlefield 4',
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/I/91eN03EElSL.jpg',
            'description' => "Battlefield 4™ Premium Edition gives you new maps, modes, and more in one simple package. Complete challenging assignments to unlock new weapons. Dominate tactical challenges in a huge interactive environment — demolish buildings shielding your enemies, lead an assault from the back of a gun boat, or make a little C4 go a long way. In massive 64-player battles, use all your resources and play to your strengths to carve your own path to victory.",
            'price' => 39.99
        ]);

        DB::table('products')->insert([
            'category_id' => 3,
            'name' => 'Portal 2',
            'image_url' => 'https://m.media-amazon.com/images/M/MV5BNzEyNGM5YjgtYjFkMC00MTE1LTk1YjgtNjAyYjA2ODUzNzQwXkEyXkFqcGdeQXVyNjk2MTcyMDA@._V1_.jpg',
            'description' => "Portal 2 draws from the award-winning formula of innovative gameplay, story, and music that earned the original Portal over 70 industry accolades and created a cult following.
            The single-player portion of Portal 2 introduces a cast of dynamic new characters, a host of fresh puzzle elements, and a much larger set of devious test chambers. Players will explore never-before-seen areas of the Aperture Science Labs and be reunited with GLaDOS, the occasionally murderous computer companion who guided them through the original game.
            The game’s two-player cooperative mode features its own entirely separate campaign with a unique story, test chambers, and two new player characters. This new mode forces players to reconsider everything they thought they knew about portals. Success will require them to not just act cooperatively, but to think cooperatively.",
            'price' => 8.19
        ]);

        DB::table('products')->insert([
            'category_id' => 4,
            'name' => 'Satisfactory',
            'image_url' => 'https://britgamer.s3.eu-west-1.amazonaws.com/2020-05/satisfactory-cover.jpg',
            'description' => "Satisfactory is a first-person open-world factory building game with a dash of exploration and combat. Play alone or with friends, explore an alien planet, create multi-story factories, and enter conveyor belt heaven!",
            'price' => 28.99
        ]);

        DB::table('products')->insert([
            'category_id' => 5,
            'name' => 'Left 4 Dead 2',
            'image_url' => 'https://www.mobygames.com/images/covers/l/173061-left-4-dead-2-windows-front-cover.jpg',
            'description' => "Set in the zombie apocalypse, Left 4 Dead 2 (L4D2) is the highly anticipated sequel to the award-winning Left 4 Dead, the #1 co-op game of 2008.
            This co-operative action horror FPS takes you and your friends through the cities, swamps and cemeteries of the Deep South, from Savannah to New Orleans across five expansive campaigns.
            You'll play as one of four new survivors armed with a wide and devastating array of classic and upgraded weapons. In addition to firearms, you'll also get a chance to take out some aggression on infected with a variety of carnage-creating melee weapons, from chainsaws to axes and even the deadly frying pan.
            You'll be putting these weapons to the test against (or playing as in Versus) three horrific and formidable new Special Infected. You'll also encounter five new uncommon common infected, including the terrifying Mudmen.
            Helping to take L4D's frantic, action-packed gameplay to the next level is AI Director 2.0. This improved Director has the ability to procedurally change the weather you'll fight through and the pathways you'll take, in addition to tailoring the enemy population, effects, and sounds to match your performance. L4D2 promises a satisfying and uniquely challenging experience every time the game is played, custom-fitted to your style of play.",
            'price' => 8.99
        ]);
    }
}
