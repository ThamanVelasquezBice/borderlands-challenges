<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Games;

class FarmingController extends Controller
{
    public function getLegendary(Request $request)
    {
        $game = Games::find($request->get('game_id'));

        if (empty($game)) {
            return response([
                'message' => 'There is no data for that game at the moment..'
            ], 404);
        }

        if (empty($game->legendaries())) {
            return response([
                'message' => 'There is no data for that game at the moment..'
            ], 404);
        }

        $needs_to_be_weapon = $request->get('needs_to_be_weapon');

        $legendary = $game->legendaries()->inRandomOrder()->first();

        if (empty($legendary)) {
            return response([
                'message' => 'There is no data for that game at the moment..'
            ], 404);
        }

        // we want to keep going until we have a weapon because class mods/relics are not good for farming
        if ($needs_to_be_weapon) {
            while (!$legendary->item_type->is_a_weapon) {
                $legendary = $game->legendaries()->inRandomOrder()->first();
            }
        }

        $loot_source = $legendary->loot_source;
        if (empty($loot_source)) {
            $loot_source = new \App\Models\LootSources;
            $loot_source->name = 'N/A';
            $region = 'N/A';
        } else {
            $region = $legendary->loot_source->region;

            if (empty($region)) {
                $region = 'N/A';
            }
        }

        return view('challenges.farming_results', compact('legendary', 'loot_source', 'region'));
    }
}
