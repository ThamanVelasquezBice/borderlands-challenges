<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\BonusRules;
use Carbon\Carbon;

class BonusRulesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
     public function run()
     {
         BonusRules::insert([
             [
                 'id' => '1',
                 'name' => 'no_class_mod',
                 'challenge_description_id' => '10',
                 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
             ], [
                 'id' => '2',
                 'name' => 'no_relic',
                 'challenge_description_id' => '11',
                 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
             ], [
                 'id' => '3',
                 'name' => 'no_grenade_mod',
                 'challenge_description_id' => '12',
                 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
             ], [
                 'id' => '4',
                 'name' => 'no_grenades',
                 'challenge_description_id' => '13',
                 'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                 'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
             ]
         ]);
     }
}
