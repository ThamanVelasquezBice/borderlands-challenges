<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ItemTypes;
use Carbon\Carbon;

class ItemTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ItemTypes::insert([
            // Borderlands 2
            [
                'id' => '1',
                'name' => 'grenade_mod',
                'is_a_weapon' => false,
                'game_id' => '2'
            ],
            [
                'id' => '2',
                'name' => 'shield',
                'is_a_weapon' => false,
                'game_id' => '2'
            ],
            [
                'id' => '3',
                'name' => 'relic',
                'is_a_weapon' => false,
                'game_id' => '2'
            ],
            [
                'id' => '4',
                'name' => 'class_mod',
                'is_a_weapon' => false,
                'game_id' => '2'
            ],
            [
                'id' => '5',
                'name' => 'smg',
                'is_a_weapon' => true,
                'game_id' => '2'
            ],
            [
                'id' => '6',
                'name' => 'pistol',
                'is_a_weapon' => true,
                'game_id' => '2'
            ],
            [
                'id' => '7',
                'name' => 'assault_rifle',
                'is_a_weapon' => true,
                'game_id' => '2'
            ],
            [
                'id' => '8',
                'name' => 'shotgun',
                'is_a_weapon' => true,
                'game_id' => '2'
            ],
            [
                'id' => '9',
                'name' => 'rocket_launcher',
                'is_a_weapon' => true,
                'game_id' => '2'
            ],
            [
                'id' => '10',
                'name' => 'sniper_rifle',
                'is_a_weapon' => true,
                'game_id' => '2'
            ],
        ]);
    }
}
