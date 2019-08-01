<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Games;
use App\Models\ChallengeTypes;
use App\Models\ItemTypes;
use App\Models\GunBrands;

class GenerateChallenge extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:challenge';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generates Challenge for you to play';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $titles = [];
        $games = Games::get('title');
        foreach ($games as $game) {
            $titles[] = $game->title;
        }

        $title = $this->choice('What game are you playing?', $titles);

        $game = Games::where('title', $title)->first();

        // $challenges = ChallengeTypes::all();

        if (empty($game)) {
            echo "There is no data for that game at the moment.. \r\n";
            return;
        }

        $choose_character = $this->choice('Do you me to choose your character?', ['no', 'yes']);

        if ($choose_character == 'yes') {
            $choose_character = true;
        } else {
            $choose_character = false;
        }

        $character = false;

        // we want to keep going until we have a weapon because class mods/relics are not good for farming
        if ($choose_character) {
            echo "Choosing character... \r\n";
            while (!$character) {
                $character = $game->characters()->inRandomOrder()->first();
            }
        }

        $challenge = ChallengeTypes::inRandomOrder()->first();

        $weapon_type = false;
        $brand = false;

        if ($challenge->name == 'weapon_type_only') {
            $weapon_type = ItemTypes::where('is_a_weapon', 1)->where('game_id', $game->id)->inRandomOrder()->first();
        }

        if ($challenge->name == 'brand_loyalty') {
            $brand = GunBrands::where('game_id', $game->id)->inRandomOrder()->first();
        }

        if ($character && $weapon_type) {
            $issued_challenge = 'Using '. $character->name .' your challenge will be: '. str_replace('_', ' ', $challenge->name) ." using the weapon type $weapon_type->name \r\n";
        } else if ($character && $brand) {
            $issued_challenge = 'Using '. $character->name .' your challenge will be: '. str_replace('_', ' ', $challenge->name) ." using the weapon brand $brand->name \r\n";
        } else if ($character) {
            $issued_challenge = 'Using '. $character->name .' your challenge will be: '. str_replace('_', ' ', $challenge->name) ."\r\n";
        } else if ($weapon_type) {
            $issued_challenge = 'Your challenge will be: '. str_replace('_', ' ', $challenge->name) ." using the weapon type $weapon_type->name \r\n";
        } else if ($brand) {
            $issued_challenge = 'Your challenge will be: '. str_replace('_', ' ', $challenge->name) ." using the weapon brand $brand->name \r\n";
        } else {
            $issued_challenge = 'Your challenge will be '. str_replace('_', ' ', $challenge->name) ."\r\n";
        }

        echo $issued_challenge;

        $need_description = $this->choice('Do you need to know the challenge description?', ['no', 'yes']);

        if ($need_description == 'yes') {
            $need_description = true;
        } else {
            $need_description = false;
        }

        if ($need_description) {
            echo $challenge->description->description."\r\n";
        }

        $bonus_rules = $this->choice('Would you like to apply bonus challenges?', ['no', 'yes']);

        if ($bonus_rules == 'yes') {
            $bonus_rules = true;
        } else {
            $bonus_rules = false;
        }

        if (!$bonus_rules) {
            echo "Alright! Enjoy your challenge: \r\n $issued_challenge \r\n";
        } else {

        }
    }
}
