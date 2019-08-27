<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;
use App\Models\ChallengeTypes;
use App\Models\ItemTypes;
use App\Models\GunBrands;
use App\Models\BonusRules;

class GeneratorController extends Controller
{
    public function generateChallenge(Request $request) {
        $game = Games::find($request->get('game_id'));

        if (empty($game)) {
            echo "There is no data for that game at the moment.. \r\n";
            return;
        }

        $choose_character = $request->get('choose_character');

        $character = false;

        // we want to keep going until we have a weapon because class mods/relics are not good for farming
        if ($choose_character) {
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
            $issued_challenge = 'Using '. $character->name .' your challenge will be: '. str_replace('_', ' ', $challenge->name) ." using the weapon type $weapon_type->name";
        } else if ($character && $brand) {
            $issued_challenge = 'Using '. $character->name .' your challenge will be: '. str_replace('_', ' ', $challenge->name) ." using the weapon brand $brand->name";
        } else if ($character) {
            $issued_challenge = 'Using '. $character->name .' your challenge will be: '. str_replace('_', ' ', $challenge->name);
        } else if ($weapon_type) {
            $issued_challenge = 'Your challenge will be: '. str_replace('_', ' ', $challenge->name) ." using the weapon type $weapon_type->name";
        } else if ($brand) {
            $issued_challenge = 'Your challenge will be: '. str_replace('_', ' ', $challenge->name) ." using the weapon brand $brand->name";
        } else {
            $issued_challenge = 'Your challenge will be '. str_replace('_', ' ', $challenge->name);
        }

        $description = $challenge->description->description;

        $bonus_rules = $request->get('bonus_rules');

        if (empty($bonus_rules)) {
            // return response()->json([
            //     'challenge' => $issued_challenge,
            //     'description' => $description
            // ], 200);
            return view('challenges.generated_challenge', compact('issued_challenge', 'description', []));
        }

        $rules = BonusRules::inRandomOrder()->limit($bonus_rules)->get();

        // return response()->json([
        //     'challenge' => $issued_challenge,
        //     'description' => $description,
        //     'bonus_rules' => $rules
        // ], 200)

        return view('challenges.generated_challenge', compact('issued_challenge', 'description', 'rules'));
    }
}
