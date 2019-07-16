<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Games;
use App\Models\ChallengeTypes;

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

        if ($character) {
            echo 'Using '. $character->name .' your challenge will be: '. str_replace('_', ' ', $challenge->name) ."\r\n";
        } else {
            echo 'Your challenge will be '. str_replace('_', ' ', $challenge->name) ."\r\n";
        }

    }
}
