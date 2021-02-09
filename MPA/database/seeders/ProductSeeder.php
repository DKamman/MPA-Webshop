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


        // Role Playing Games

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'The Witcher: Wild Hunt',
            'image_url' => 'https://1.bp.blogspot.com/-yGH7VCRDB_8/XT5xVc2SQYI/AAAAAAAATd0/LfUSqsP8yhYbuHY85jkhXMgP0A30ZxhugCLcBGAs/s2560/the-witcher-wild-hunt-4k-86-1080x1920.jpg',
            'description' => "The Witcher: Wild Hunt is a story-driven open world RPG set in a visually stunning fantasy universe full of meaningful choices and impactful consequences. In The Witcher, you play as professional monster hunter Geralt of Rivia tasked with finding a child of prophecy in a vast open world rich with merchant cities, pirate islands, dangerous mountain passes, and forgotten caverns to explore.",
            'price' => 29.99
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Divinity II: Ego Draconis',
            'image_url' => 'https://www.mobygames.com/images/covers/l/160953-divinity-ii-ego-draconis-windows-front-cover.jpg',
            'description' => "The main focus of the game is on traditional action-role playing gameplay, which includes completing quests, exploring the game world, and interacting with a variety of non-player characters. Divinity II utilizes some elements of games like Diablo, such as a focus on upgrading equipment, randomized magical effects on equipment, unique item sets that offer greater benefits when used together, and some quest mechanics such as markers to show that an NPC will offer a quest to the player. However, it also uses elements from more traditional role-playing games, such as branching conversation trees, choices that affect other events in the game, and non-combat segments, such as platforming or puzzle elements. When interacting with non-player characters, the player will often have the option to read their minds, which can provide information, extra choices in a quest, or equipment, at a certain cost to their experience points. The 'experience debt' then has to be repaid before they can gain experience again.",
            'price' => 15.00
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Borderlands 3',
            'image_url' => 'https://www.posterarthouse.com/media/catalog/product/cache/c687aa7517cf01e65c009f6943c2b1e9/1/6/160886.jpg',
            'description' => "The original shooter-looter returns, packing bazillions of guns and an all-new mayhem-fueled adventure! Blast through new worlds and enemies as one of four brand new Vault Hunters – the ultimate treasure-seeking badasses of the Borderlands, each with deep skill trees, abilities, and customization. Play solo or join with friends to take on insane enemies, score loads of loot and save your home from the most ruthless cult leaders in the galaxy.",
            'price' => 19.79
        ]);

        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'Cyberpunk 2077',
            'image_url' => 'https://i.redd.it/pp63ewz3bt611.jpg',
            'description' => "Cyberpunk 2077 is an open-world, action-adventure story set in Night City, a megalopolis
            obsessed with power, glamour and body modification. You play as V, a mercenary outlaw going after a one-of-a-kind implant that is the key to immortality. You can customize your character’s cyberware, skillset and playstyle, and explore a vast city where the choices you make shape the story and the world around you.",
            'price' => 59.99
        ]);
        
        DB::table('products')->insert([
            'category_id' => 1,
            'name' => 'The Elder Scrolls Online',
            'image_url' => 'https://s1.gaming-cdn.com/images/products/2502/orig/the-elder-scrolls-online-summerset-cover.jpg',
            'description' => "Experience an ever-expanding story across all of Tamriel in The Elder Scrolls Online, an award-winning online RPG. Explore a rich, living world with friends or embark upon a solo adventure. Enjoy complete control over how your character looks and plays, from the weapons you wield to the skills you learn – the choices you make will shape your destiny. Welcome to a world without limits.",
            'price' => 19.99
        ]);


        // First Person Shooters

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Battlefield 4',
            'image_url' => 'https://images-na.ssl-images-amazon.com/images/I/91eN03EElSL.jpg',
            'description' => "Battlefield 4™ Premium Edition gives you new maps, modes, and more in one simple package. Complete challenging assignments to unlock new weapons. Dominate tactical challenges in a huge interactive environment — demolish buildings shielding your enemies, lead an assault from the back of a gun boat, or make a little C4 go a long way. In massive 64-player battles, use all your resources and play to your strengths to carve your own path to victory.",
            'price' => 39.99
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Counter-Strike: Global Offensive',
            'image_url' => 'https://static.wikia.nocookie.net/cswikia/images/1/1e/Csgo_steam_store_header_latest.jpg/revision/latest?cb=20170630034202',
            'description' => "Battlefield 4™ Premium Edition gives you new maps, modes, and more in one simple package. Complete challenging assignments to unlock new weapons. Dominate tactical challenges in a huge interactive environment — demolish buildings shielding your enemies, lead an assault from the back of a gun boat, or make a little C4 go a long way. In massive 64-player battles, use all your resources and play to your strengths to carve your own path to victory.",
            'price' => 39.99
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Insurgency',
            'image_url' => 'https://s1.gaming-cdn.com/images/products/1029/orig/insurgency-cover.jpg',
            'description' => "Take to the streets for intense close quarters combat, where a team's survival depends upon securing crucial strongholds and destroying enemy supply in this multiplayer and cooperative Source Engine based experience. The follow-up game to the award-winning Source mod, Insurgency is highly competitive and unforgivingly lethal, striking a balance between one-life gameplay and prolonged action.",
            'price' => 0
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Squad',
            'image_url' => 'https://britgamer.s3.eu-west-1.amazonaws.com/styles/cover_art/s3/2020-05/squad-cover.jpg?itok=5AqI8Uue',
            'description' => "Squad is a large scale combined arms multiplayer first-person shooter emphasizing combat realism through communication, team play, emphasizing strong squad cohesion mechanics as well as larger-scale coordination, tactics, and planning.",
            'price' => 44.99
        ]);

        DB::table('products')->insert([
            'category_id' => 2,
            'name' => 'Onward',
            'image_url' => 'https://cdnb.artstation.com/p/assets/covers/images/028/147/409/large/liya-bohnat-liya-bohnat-2-gigapixel-scale-2-00x.jpg?1593616102',
            'description' => "Experience a first person shooter as you never have before: Onward combines mil-sim gameplay with the experience of playing in virtual reality. Players cannot rely on crosshairs or mini maps. Instead, you must rely on coordination and communication with your squad In order to succeed at your objective. Realistic combat mechanics and artificial locomotion will push your combat survival skills to their limit as you engage in infantry combat across a large variety of maps and combat situations.",
            'price' => 22.99
        ]);


        // Puzzle Games

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
            'category_id' => 3,
            'name' => 'Tabletop Simulator',
            'image_url' => 'https://cdn.cdkeys.com/media/catalog/product/t/a/tabletop_simulator_pc_cover.png',
            'description' => "Create your own original games, import custom assets, automate games with scripting, set up complete RPG dungeons, manipulate the physics, create hinges & joints, and of course flip the table when you are losing the game. All with an easy to use system integrated with Steam Workshop. You can do anything you want in Tabletop Simulator. The possibilities are endless!",
            'price' => 19.99
        ]);
        
        DB::table('products')->insert([
            'category_id' => 3,
            'name' => 'Poly Bridge 2',
            'image_url' => 'https://cdn1.epicgames.com/9b31326adff64c7fa7bbac6e8d4a9e6e/offer/PB2-Portrait-1200x1600-1200x1600-b1f9a2391c4a111cb3f5616e564a5b28.jpg?h=854&resize=1&w=640',
            'description' => "New levels, new mechanics, a custom physics engine, workshop campaigns, and much more! Rediscover your engineering creativity with even more hours of puzzling fun!",
            'price' => 3.99
        ]);
        
        DB::table('products')->insert([
            'category_id' => 3,
            'name' => 'Human: Fall Flat',
            'image_url' => 'https://store-images.s-microsoft.com/image/apps.11231.13815544201998268.dcc445d8-9bc1-4d1f-ba2d-01c2e643d974.04f9ff68-ff2f-4c1e-ade2-721832acec48',
            'description' => "Partake in hilarious variations of bowling, crossbows and basketball before soaring through the night sky on your very own drone - one of the most exhilarating experiences offered in a dreamscape so far.",
            'price' => 18.99
        ]);
        
        DB::table('products')->insert([
            'category_id' => 3,
            'name' => 'The Stanley Parable',
            'image_url' => 'https://vgboxart.com/boxes/PC/77235-the-stanley-parable.png',
            'description' => "The Stanley Parable is a first person exploration game. You will play as Stanley, and you will not play as Stanley. You will follow a story, you will not follow a story. You will have a choice, you will have no choice. The game will end, the game will never end. Contradiction follows contradiction, the rules of how games should work are broken, then broken again. This world was not made for you to understand.",
            'price' => 11.99
        ]);


        // Sandbox Games

        DB::table('products')->insert([
            'category_id' => 4,
            'name' => 'Satisfactory',
            'image_url' => 'https://britgamer.s3.eu-west-1.amazonaws.com/2020-05/satisfactory-cover.jpg',
            'description' => "Satisfactory is a first-person open-world factory building game with a dash of exploration and combat. Play alone or with friends, explore an alien planet, create multi-story factories, and enter conveyor belt heaven!",
            'price' => 28.99
        ]);
        
        DB::table('products')->insert([
            'category_id' => 4,
            'name' => 'Red Dead Redemption 2',
            'image_url' => 'https://www.gtabase.com/igallery/4201-4300/RDR_2_Cover_PC-4213-1920.jpg',
            'description' => "Arthur Morgan and the Van der Linde gang are outlaws on the run. With federal agents and the best bounty hunters in the nation massing on their heels, the gang must rob, steal and fight their way across the rugged heartland of America in order to survive. As deepening internal divisions threaten to tear the gang apart, Arthur must make a choice between his own ideals and loyalty to the gang who raised him.
            ",
            'price' => 59.99
        ]);
        
        DB::table('products')->insert([
            'category_id' => 4,
            'name' => 'Universe Sandbox',
            'image_url' => 'https://cdn-products.eneba.com/resized-products/nUoVigHu4EPBDnI1tB6_Rex-ljnyzBGphb58DT5XnPo_350x200_2x-0.jpg',
            'description' => "Universe Sandbox is a physics-based space simulator that allows you to create, destroy, and interact on an unimaginable scale.",
            'price' => 24.99
        ]);
        
        DB::table('products')->insert([
            'category_id' => 4,
            'name' => 'Rust',
            'image_url' => 'https://cdn.cdkeys.com/media/catalog/product/r/u/rustpc-cover.png',
            'description' => "The only aim in Rust is to survive. To do this you will need to overcome struggles such as hunger, thirst and cold. Build a fire. Build a shelter. Kill animals for meat. Protect yourself from other players, and kill them for meat. Create alliances with other players and form a town.",
            'price' => 33.99
        ]);
        
        DB::table('products')->insert([
            'category_id' => 4,
            'name' => 'ARK: Survival Evolved',
            'image_url' => 'https://storage.googleapis.com/img.moonify.io/avatars/lootgame/cover_ark-survival-evolved-452564.jpeg?FIXMB',
            'description' => "As a man or woman stranded naked, freezing and starving on the shores of a mysterious island called ARK, you must hunt, harvest resources, craft items, grow crops, research technologies, and build shelters to withstand the elements. Use your cunning and resources to kill or tame & breed the leviathan dinosaurs and other primeval creatures roaming the land, and team up with or prey on hundreds of other players to survive, dominate... and escape!",
            'price' => 54.99
        ]);


        // Zombie Games

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
        
        DB::table('products')->insert([
            'category_id' => 5,
            'name' => 'Resident Evil 2',
            'image_url' => 'https://s1.gaming-cdn.com/images/products/2709/orig/resident-evil-2-biohazard-re2-cover.jpg',
            'description' => "The genre-defining masterpiece Resident Evil 2 returns, completely rebuilt from the ground up for a deeper narrative experience. Using Capcom’s proprietary RE Engine, Resident Evil 2 offers a fresh take on the classic survival horror saga with breathtakingly realistic visuals, heart-pounding immersive audio, a new over-the-shoulder camera, and modernized controls on top of gameplay modes from the original game.",
            'price' => 39.99
        ]);
        
        DB::table('products')->insert([
            'category_id' => 5,
            'name' => 'DayZ',
            'image_url' => 'https://steamuserimages-a.akamaihd.net/ugc/790875265486183458/EB982443BA692101199E533CC0DEDF25B2AB0269/',
            'description' => "DayZ is a hardcore open-world survival game with only one rule: stay alive, no matter what. But with a myriad of threats lurking around every corner, that might be easier said than done...",
            'price' => 39.99
        ]);
        
        DB::table('products')->insert([
            'category_id' => 5,
            'name' => 'Sniper Elite: Nazi Zombie Army',
            'image_url' => 'https://static.wikia.nocookie.net/sniperelitegame/images/2/22/Senza.jpg/revision/latest?cb=20200218025437',
            'description' => "Featuring a co-op campaign for 1 to 4 players, Nazi Zombie Army is a horrifying new stand-alone expansion of the award-winning Sniper Elite series.
            In the dying flames of World War II, a despairing Hitler unleashes one final, unholy gamble – a legion of undead super soldiers that threatens to overwhelm the whole of Europe.",
            'price' => 14.99
        ]);
        
        DB::table('products')->insert([
            'category_id' => 5,
            'name' => 'Dying Light 2',
            'image_url' => 'https://store-images.s-microsoft.com/image/apps.9965.63224705253913975.ec4ce281-2139-4076-9dc9-733fe2b0602b.874ffd2d-23b2-4ad5-8627-6281fe7e8b60',
            'description' => "It’s been 15 years since humanity lost to the virus. The last great human settlement exists within an unforgiving, infected world, plunged into a modern dark age. During the day, bandits, factions and starving survivors roam the streets scavenging for scraps - or someone to take them from, by violence if necessary. At night the infected roam free, evacuating their dark hideouts to prey on the living.",
            'price' => -1
        ]);
    }
}
