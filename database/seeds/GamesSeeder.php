<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Games;
use Carbon\Carbon;

class GamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Games::insert([
            [
                'id' => '1',
                'title' => 'Borderlands',
                'description' => 'Lock, Load, & Face the Madness
                                    Get ready for the mind blowing insanity! Play as one of four trigger-happy mercenaries and take out everything that stands in your way!
                                    With its addictive action, frantic first-person shooter combat, massive arsenal of weaponry, RPG elements and four-player co-op*, Borderlands is a breakthrough experience that challenges all the conventions of modern shooters. Borderlands places you in the role of a mercenary on the lawless and desolate planet of Pandora, hell-bent on finding a legendary stockpile of powerful alien technology known as The Vault.',
                'image_url' => 'https://steamcdn-a.akamaihd.net/steam/apps/8980/header.jpg',
                'release_date' => 'October 20th 2009',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '2',
                'title' => 'Borderlands 2',
                'description' => 'A new era of shoot and loot is about to begin. Play as one of four new vault hunters facing off against a massive new world of creatures, psychos and the evil mastermind, Handsome Jack. Make new friends, arm them with a bazillion weapons and fight alongside them in 4 player co-op on a relentless quest for revenge and redemption across the undiscovered and unpredictable living planet.',
                'image_url' => 'https://steamcdn-a.akamaihd.net/steam/apps/49520/header.jpg',
                'release_date' => 'September 18th 2012',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '3',
                'title' => 'Borderlands: The Pre-Sequel',
                'description' => 'LAUNCH INTO THE BORDERLANDS UNIVERSE AND SHOOT ‘N’ LOOT YOUR WAY THROUGH A BRAND NEW ADVENTURE THAT ROCKETS YOU ONTO PANDORA’S MOON IN BORDERLANDS: THE PRE-SEQUEL!
                                    Discover the story behind Borderlands 2 villain, Handsome Jack, and his rise to power. Taking place between the original Borderlands and Borderlands 2, the Pre-Sequel gives you a whole lotta new gameplay featuring the genre blending fusion of shooter and RPG mechanics that players have come to love.
                                    Float through the air with each low gravity jump while taking enemies down from above using new ice and laser weapons. Catch-a-ride and explore the lunar landscape with new vehicles allowing for more levels of destructive mayhem.',
                'image_url' => 'https://steamcdn-a.akamaihd.net/steam/apps/261640/header.jpg',
                'release_date' => 'October 14th 2014',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '4',
                'title' => 'Borderlands 3',
                'description' => 'WELCOME TO BORDERLANDS 3
                                    Blast through new worlds and enemies as one of four brand new Vault Hunters – the ultimate treasure-seeking badasses of the Borderlands, each with deep skill trees, abilities and customization.',
                'image_url' => 'https://cdn.2kgames.com/web/borderlands.com/b3/fob_oak_std_L_1huKy5bR.jpg',
                'release_date' => 'September 13th 2019',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
