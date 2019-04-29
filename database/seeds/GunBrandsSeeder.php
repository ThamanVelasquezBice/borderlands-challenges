<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\GunBrands;
use Carbon\Carbon;

class GunBrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        GunBrands::insert([
            [
                'id' => '1',
                'name' => 'Bandit',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/0/0f/400px-Bandit_logo.png',
                'game_id' => '2'
            ],
            [
                'id' => '2',
                'name' => 'Dahl',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/9/99/Dahl_White.png',
                'game_id' => '2'
            ],
            [
                'id' => '3',
                'name' => 'Hyperion',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/a/a7/Hyperion.png',
                'game_id' => '2'
            ],
            [
                'id' => '4',
                'name' => 'Jakobs',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/8/81/Jakobs.png',
                'game_id' => '2'
            ],
            [
                'id' => '5',
                'name' => 'Maliwan',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/e/e2/Maliwan-0.png',
                'game_id' => '2'
            ],
            [
                'id' => '6',
                'name' => 'Tediore',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/1/11/Tediore.png',
                'game_id' => '2'
            ],
            [
                'id' => '7',
                'name' => 'Torgue',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/4/44/Torgue.png',
                'game_id' => '2'
            ],
            [
                'id' => '8',
                'name' => 'Vladof',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/5/5e/Vladof.png',
                'game_id' => '2'
            ],
            [
                'id' => '9',
                'name' => 'Anshin',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/5/5e/Anshin.png/revision/latest/scale-to-width-down/300?cb=20180228133356',
                'game_id' => '2'
            ],
            [
                'id' => '10',
                'name' => 'Pangolin',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/2/28/Pangolin.png/revision/latest/scale-to-width-down/350?cb=20180228145914',
                'game_id' => '2'
            ]
        ]);
    }
}
