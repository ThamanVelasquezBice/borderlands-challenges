<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\ChallengeDescriptions;
use Carbon\Carbon;

class ChallengeDescriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ChallengeDescriptions::insert([
            [
                'id' => '1',
                'description' => 'Play the game however ya like, but when you die... well you die. Delete your character!',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'id' => '2',
                'description' => 'You can use class mods and relics and even grenades, but guns? Outta the picture. Melee is the primary form of damage',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'id' => '3',
                'description' => 'We are gonna select a gun brand and thats it. No shields, no grenade mods and no guns unless they are from your favorite brand!',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'id' => '4',
                'description' => 'I hope you like punching! Because until you can get that first legendary, your fists are gonna be seeing a lot of action',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'id' => '5',
                'description' => 'You\'re luck must be running out, you can only use white rarity weapons..... sorry....',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'id' => '6',
                'description' => 'You can have your action skill but anything after that? Sorry but no.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'id' => '7',
                'description' => 'Tough luck, all those skill points you\'re collecting? Yea they are WORTHLESS.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'id' => '8',
                'description' => 'We are gonna choose a weapon type for you and you are gonna stick with it',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'id' => '9',
                'description' => 'Look up the world record speedrun on speedrun.com. Set the timer and go, once the timer is up the challenge is over!  You don\'t have to delete it, but if you don\'t make it you are a loser.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'id' => '10',
                'description' => 'This is going to be annoying! Every time you pick up a class mod, be sure to unequip it! You can\'t have any of that.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'id' => '11',
                'description' => 'This is going to be annoying! Every time you pick up a relic, be sure to unequip it! You can\'t have any of that.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'id' => '12',
                'description' => 'This is going to be annoying! Every time you pick up a grenade mod, be sure to unequip it! You can\'t have any of that.',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ], [
                'id' => '13',
                'description' => 'This is going to be annoying! Don\'t ever use grenades. At all! They are banned for this playthrough',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ]
        ]);
    }
}
