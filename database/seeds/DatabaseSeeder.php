<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(BonusRulesSeeder::class);
        $this->call(ChallengeDescriptionsSeeder::class);
        $this->call(ChallengeTypesSeeder::class);
        $this->call(CharactersSeeder::class);
        $this->call(GamesSeeder::class);
        $this->call(GunBrandsSeeder::class);
        $this->call(ItemTypesSeeder::class);
        $this->call(LegendariesSeeder::class);
        $this->call(LootSourcesSeeder::class);
    }
}
