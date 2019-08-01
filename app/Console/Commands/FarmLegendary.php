<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Games;

class FarmLegendary extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'farm:legendary {--game_id=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Give you a weapon to farm';

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

        if (empty($game->legendaries())) {
            echo "There is no data for that game at the moment.. \r\n";
            return;
        }

        $needs_to_be_weapon = $this->choice('Do you want to exclude class mods?', ['no', 'yes']);

        if ($needs_to_be_weapon == 'yes') {
            $needs_to_be_weapon = true;
        } else {
            $needs_to_be_weapon = false;
        }

        $legendary = $game->legendaries()->inRandomOrder()->first();

        if (empty($legendary)) {
            echo "There is no data for that game at the moment.. \r\n";
            return;
        }

        // we want to keep going until we have a weapon because class mods/relics are not good for farming
        if ($needs_to_be_weapon) {
            while (!$legendary->item_type->is_a_weapon) {
                $legendary = $game->legendaries()->inRandomOrder()->first();
            }
        }

        echo 'Farm the '. $legendary->name .' drops from '. $legendary->loot_source->name .' at '. $legendary->loot_source->region;
    }
}
