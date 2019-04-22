<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\Characters;

class CharactersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Characters::insert([
            // Borderlands 1
            [
                'id' => '1',
                'name' => 'Lilith',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/5/54/81d31.jpg',
                'game_id' => '1'
            ],
            [
                'id' => '2',
                'name' => 'Roland',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/1/13/79f1.jpg',
                'game_id' => '1'
            ],
            [
                'id' => '3',
                'name' => 'Mordecai',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/9/92/62b6.jpg',
                'game_id' => '1'
            ],
            [
                'id' => '4',
                'name' => 'Brick',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/0/0a/5fe0.jpg',
                'game_id' => '1'
            ],

            // Borderlands 2
            [
                'id' => '5',
                'name' => 'Axton',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/a/ac/Axton01.png',
                'game_id' => '2'
            ],
            [
                'id' => '6',
                'name' => 'Maya',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/7/7c/BL2_maya_phaselock.jpeg',
                'game_id' => '2'
            ],
            [
                'id' => '7',
                'name' => 'Salvador',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/3/3d/GunzerkerPortrait.png',
                'game_id' => '2'
            ],
            [
                'id' => '8',
                'name' => 'Zer0',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/6/6d/Zero01.png',
                'game_id' => '2'
            ],
            [
                'id' => '9',
                'name' => 'Gaige',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/5/59/Gaige_%26_D374-TP_-_Render.png',
                'game_id' => '2'
            ],
            [
                'id' => '10',
                'name' => 'Krieg',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/d/db/Krieg.jpg',
                'game_id' => '2'
            ],

            // Borderlands: The Pre-Sequel
            [
                'id' => '11',
                'name' => 'Athena',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/c/c8/Athena_the_Gladiator_Pose01.jpg',
                'game_id' => '3'
            ],
            [
                'id' => '12',
                'name' => 'Wilhelm',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/a/a8/Wilhelmfront.png',
                'game_id' => '3'
            ],
            [
                'id' => '13',
                'name' => 'Nisha',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/b/b0/Nish2.jpg',
                'game_id' => '3'
            ],
            [
                'id' => '14',
                'name' => 'Claptrap',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/b/b5/ClaptrapTPS.jpeg',
                'game_id' => '3'
            ],
            [
                'id' => '15',
                'name' => 'Aurelia',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/6/6b/FullBaron.jpg',
                'game_id' => '3'
            ],
            [
                'id' => '16',
                'name' => 'Handsome Jack',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/d/d4/Jack-icon.png',
                'game_id' => '3'
            ],

            // Borderlands 3
            [
                'id' => '17',
                'name' => 'Fl4k',
                'image_url' => 'https://borderlands.com/images/welcome/choose-char-4.png',
                'game_id' => '4'
            ],
            [
                'id' => '18',
                'name' => 'Moze',
                'image_url' => 'https://borderlands.com/images/welcome/choose-char-1.png',
                'game_id' => '4'
            ],
            [
                'id' => '19',
                'name' => 'Zane',
                'image_url' => 'https://borderlands.com/images/welcome/choose-char-2.png',
                'game_id' => '4'
            ],
            [
                'id' => '20',
                'name' => 'Amara',
                'image_url' => 'https://borderlands.com/images/welcome/choose-char-3.png',
                'game_id' => '4'
            ]
        ]);
    }
}
