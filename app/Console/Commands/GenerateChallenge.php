<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Games;
use App\Models\ChallengeTypes;
use App\Models\ItemTypes;
use App\Models\GunBrands;
use App\Models\BonusRules;

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

        // business logic if the challenge requires more than just the name
        if ($challenge->name == 'weapon_type_only') {
            $weapon_type = ItemTypes::where('is_a_weapon', 1)->where('game_id', $game->id)->inRandomOrder()->first();
        }
        if ($challenge->name == 'brand_loyalty') {
            $brand = GunBrands::where('game_id', $game->id)->inRandomOrder()->first();
        }

        // define base challenge that the user will see
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

        // decides whether or not the user would like to see the challenges description
        $need_description = $this->choice('Do you need to know the challenge description?', ['no', 'yes']);

        if ($need_description == 'yes') {
            $need_description = true;
        } else {
            $need_description = false;
        }

        if ($need_description) {
            echo $challenge->description->description."\r\n";
        }

        // decides whether or not the user would like to have additional challenges
        $bonus_rules = $this->choice('Would you like to apply bonus challenges? (there are only 4 of them)', ['no', 'yes']);

        if ($bonus_rules == 'yes') {
            $bonus_rules = true;
        } else {
            $bonus_rules = false;
        }

        // if no, we are done. return!
        if (!$bonus_rules) {
            echo "Alright! Enjoy your challenge: \r\n $issued_challenge \r\n";

            return;
        }

        $number_of_bonus_rules = 'not a number';

        // here we want a simple way of validating the data type the user sent
        while (!is_numeric($number_of_bonus_rules)) {
            $number_of_bonus_rules = $this->ask('How many bonus challenges would you like? (numberic format only; ie 1,2,3...)');

            if (!is_numeric($number_of_bonus_rules)) {
                echo "Input value must be a number ie 1,2,3 \r\n";
            }
        }

        $rules = BonusRules::inRandomOrder()->limit($number_of_bonus_rules)->get();
        $rules_array = [];

        foreach ($rules as $rule) {
            $rules_array[] = str_replace('_', ' ', $rule->name);
        }

        $rules_array = str_replace(',', ', ', implode(",",$rules_array));

        // remind the user of their final challenge and ask if they need to know the descriptions of the bonus challenges
        $need_description =
        $this->choice("OK. So here is your challenge: \r\n $issued_challenge and here are your bonus challenges: $rules_array \r\n Do you need the bonus challenge descriptions?", ["no", "yes"]);

        if ($need_description == 'yes') {
            $need_description = true;
        } else {
            $need_description = false;
        }

        // display the descritpion of the bonus challenges
        if ($need_description) {
            foreach ($rules as $rule) {
                echo str_replace('_', ' ', $rule->name).": ".$rule->description->description."\r\n";
            }
        }
    }
}
