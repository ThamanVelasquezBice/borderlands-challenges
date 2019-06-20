<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\LootSources;
use Carbon\Carbon;

class ChallengeTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        LootSources::insert([
            [
                'id' => '1',
                'name' => 'Badass Creeper',
                'region' => 'Caustic Caverns - Hidden Cave',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/3/36/Creeper_2.jpg/revision/latest/scale-to-width-down/310?cb=20180125164446',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '2',
                'name' => 'Badass Sourcerer',
                'region' => 'Tiny Tina\'s Assault on Dragon Keep',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/2/29/Sorcerer.jpg/revision/latest/scale-to-width-down/310?cb=20170202225419',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '3',
                'name' => 'Blue',
                'region' => 'Caustic Caverns',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/a/ae/Blue.jpg/revision/latest/scale-to-width-down/310?cb=20121001180847',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '4',
                'name' => 'BNK3R',
                'region' => 'Thousand Cuts',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/7/76/2012-09-24_00001.jpg/revision/latest/scale-to-width-down/310?cb=20120924232315',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '5',
                'name' => 'Clark the Combusted Cryptkeeper',
                'region' => 'Hallowed Hollows',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/f/fb/Combusted_Gatekeeper_Infoboxpic_2.jpg/revision/latest/scale-to-width-down/620?cb=20180130213030',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '6',
                'name' => 'Boll',
                'region' => 'Three Horns - Divide',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/4/41/Boll.jpg/revision/latest/scale-to-width-down/310?cb=20170111002839',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '7',
                'name' => 'Boom and Bewm',
                'region' => 'Southern Shelf',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/9/91/Boom.jpg/revision/latest/scale-to-width-down/310?cb=20170110235850',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '8',
                'name' => 'Captain Flynt',
                'region' => 'Southern Shelf',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/c/c7/Captain_Flynt.jpg/revision/latest/scale-to-width-down/310?cb=20121126120809',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '9',
                'name' => 'Chubby Enemies',
                'region' => 'Any Location',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/d/d8/Varkid_Chubby_2.jpg/revision/latest/scale-to-width-down/258?cb=20170525160115',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '10',
                'name' => 'Doc Mercy',
                'region' => 'Three Horns Valley',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/c/c3/Doc_Mercy.jpg/revision/latest/scale-to-width-down/310?cb=20170110235850',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '11',
                'name' => 'Dukino\'s Mom',
                'region' => 'Lynchwood',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/e/e1/Mamadukino.jpg/revision/latest/scale-to-width-down/310?cb=20130619210552',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '12',
                'name' => 'Foreman Jasper',
                'region' => 'Oppurtunity',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/8/8f/Foreman_Jasper_3.jpg/revision/latest/scale-to-width-down/310?cb=20180130221906',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '13',
                'name' => 'Gettle',
                'region' => 'The Dust',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/0/00/Gettle_1.jpg/revision/latest/scale-to-width-down/310?cb=20170110235852',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '14',
                'name' => 'Henry',
                'region' => 'Outside Overlook',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/b/b1/Henry_Infoboxpic_1.jpg/revision/latest/scale-to-width-down/310?cb=20180130223055',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '15',
                'name' => 'Tumbaa',
                'region' => 'Wildlife Exploitation Preserve',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/3/37/Tumbaa.jpg/revision/latest/scale-to-width-down/620?cb=20170111000104',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '16',
                'name' => 'Hunter Hellquist',
                'region' => 'Arid Nexus - Boneyard',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/e/e1/Hunter_Hellquist_3.jpg/revision/latest/scale-to-width-down/310?cb=20170110235852',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '17',
                'name' => 'Incinerator Clayton',
                'region' => 'Frostburn Canyon',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/f/fd/Incinerator_clayton01.png/revision/latest/scale-to-width-down/310?cb=20120926003151',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '19',
                'name' => 'King Mong',
                'region' => 'Eridium Blight',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/9/91/King_Mong_1.jpg/revision/latest/scale-to-width-down/310?cb=20170111004634',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '20',
                'name' => 'King of Orks',
                'region' => 'Tiny Tina\'s Assualt on Dragon Keep',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/b/b6/Warlord_slog.jpg/revision/latest/scale-to-width-down/310?cb=20161119040311',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '21',
                'name' => 'Knuckle Dragger',
                'region' => 'Windshear Waste',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/a/a4/Knuckledragger.png/revision/latest/scale-to-width-down/310?cb=20120919213305',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '22',
                'name' => 'Laney White',
                'region' => 'The Fridge',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/4/43/Laney_White_1.jpg/revision/latest/scale-to-width-down/310?cb=20180130230105',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '23',
                'name' => 'Splinter Group',
                'region' => 'Bloodshot Stronghold',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/6/61/Splinter_Group.jpg/revision/latest/scale-to-width-down/310?cb=20170106223903',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '24',
                'name' => 'Loot Midget',
                'region' => 'Any Location',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/8/89/BL1_Mini_Steve_1.jpg/revision/latest/scale-to-width-down/208?cb=20171219230105',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '25',
                'name' => 'Mad Dog',
                'region' => 'Lynchwood',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/9/98/Mad_Dog_1.jpg/revision/latest/scale-to-width-down/310?cb=20170110235852',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '26',
                'name' => 'Madame Von Bartlesby',
                'region' => 'Tundra Express',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/c/c0/Bartlesby.jpg/revision/latest/scale-to-width-down/310?cb=20170108010847',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '27',
                'name' => 'McNally',
                'region' => 'The Dust',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/4/42/McNally01.png/revision/latest?cb=20121125011626',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '28',
                'name' => 'Mick Zaford',
                'region' => 'The Dust',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/7/70/Mick_Zaford01.png/revision/latest/scale-to-width-down/310?cb=20121005012127',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '29',
                'name' => 'Midge-Mong',
                'region' => 'Southern Shelf - Bay',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/1/12/MidgeMong_1.jpg/revision/latest/scale-to-width-down/310?cb=20170111004634',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '30',
                'name' => 'Mobley',
                'region' => 'The Dust',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/e/e1/Mobley01.png/revision/latest/scale-to-width-down/310?cb=20121108070929',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '31',
                'name' => 'Mortar',
                'region' => 'Sawtooth Cauldron',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/4/4b/Mortar.jpg/revision/latest/scale-to-width-down/302?cb=20170111000008',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '32',
                'name' => 'Old Slappy',
                'region' => 'The Highlands - Outwash',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/7/77/Old_Slappy.png/revision/latest/scale-to-width-down/310?cb=20130320113816',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '33',
                'name' => 'Pimon',
                'region' => 'Wildlife Exploitation Preserve',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/9/9d/Pimon_1.jpg/revision/latest/scale-to-width-down/310?cb=20170111000008',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '34',
                'name' => 'Pyro Pete The Invincible',
                'region' => 'Pyro Pete\'s Bar in the Beatdown',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/c/c3/Pete_the_Invincible.jpg/revision/latest/scale-to-width-down/310?cb=20121122121421',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '35',
                'name' => 'Rakkman',
                'region' => 'The Fridge',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/7/7e/Rakkman.jpg/revision/latest/scale-to-width-down/310?cb=20170111000009',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '36',
                'name' => 'Saturn',
                'region' => 'Fyrestone',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/e/ed/Saturn_1.jpg/revision/latest/scale-to-width-down/310?cb=20170111000010',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '37',
                'name' => 'Savage Lee',
                'region' => 'Three Horns - Divide',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/0/09/Savage_Lee.jpg/revision/latest/scale-to-width-down/310?cb=20170111000010',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '38',
                'name' => 'Scorch',
                'region' => 'Frostburn Canyon',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/0/06/Scorch.png/revision/latest/scale-to-width-down/310?cb=20141104005532',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '39',
                'name' => 'Smash-Head',
                'region' => 'The Fridge',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/1/1d/Smash-Head.jpg/revision/latest/scale-to-width-down/310?cb=20170111000102',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '40',
                'name' => 'Son of Mothrakk',
                'region' => 'Wildlife Exploitation Preserve',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/0/02/Son_of_Mothrakk_1.jpg/revision/latest/scale-to-width-down/310?cb=20170111000103',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '41',
                'name' => 'Spycho',
                'region' => 'Frostburn Canyon',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/2/29/Spycho01.png/revision/latest/scale-to-width-down/310?cb=20150811120635',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '42',
                'name' => 'Tector & Jimbo Hodunk',
                'region' => 'The Dust',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/4/48/J%26T01.png/revision/latest?cb=20121003084417',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '43',
                'name' => 'Terramorphous The Invincible',
                'region' => 'Terramorphous\' Lair under Thousand Cuts',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/9/9c/Terramorphous.png/revision/latest/scale-to-width-down/310?cb=20120813163307',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '44',
                'name' => 'The Black Queen',
                'region' => 'The Dust',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/d/d2/Black_Queen_1.jpg/revision/latest/scale-to-width-down/310?cb=20180130221043',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '45',
                'name' => 'The Warrior',
                'region' => 'Hero\'s Pass',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/8/83/TheWarrior.png/revision/latest/scale-to-width-down/310?cb=20141008121803',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '46',
                'name' => 'Ultimate Badass Varkid',
                'region' => 'Caustic Caverns, Tundra Express',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/8/8d/Varkid_Badass_Ultimate_5.jpg/revision/latest/scale-to-width-down/310?cb=20170525160115',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '47',
                'name' => 'Vermivorous the Invincible',
                'region' => 'Caustic Caverns, Tundra Express',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/5/55/Vermi.png/revision/latest/scale-to-width-down/310?cb=20121215071503',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '48',
                'name' => 'Wilhelm',
                'region' => 'End of the Line (Outside Tundra Express)',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/9/9d/49520_20160903192918_1.png/revision/latest/scale-to-width-down/208?cb=20180503204949',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '49',
                'name' => 'Wot, Oney, Reeth, Rouf',
                'region' => 'Southpaw Steam & Power',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/7/77/Assassin_Rouf.jpg/revision/latest/scale-to-width-down/310?cb=20170110235848',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '50',
                'name' => 'Infected Badass Saplings',
                'region' => 'Any Location in Commander Lillith\'s Fight for Sanctuary',
                'image_url' => '',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '51',
                'name' => 'Haderax the Invincible',
                'region' => 'Writhing Deep',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/3/3c/Haderax_The_Invincible.PNG/revision/latest/scale-to-width-down/310?cb=20190611155509',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '52',
                'name' => 'Lt. Hoffman',
                'region' => 'Mt. Scarab Research Center',
                'image_url' => '',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '53',
                'name' => 'Lt. Bolson',
                'region' => 'Dahl Abandon',
                'image_url' => '',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '54',
                'name' => 'Butt Stallion',
                'region' => 'The Backburner',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/e/e2/Buttstallion.jpg/revision/latest/scale-to-width-down/310?cb=20130627031905',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '55',
                'name' => 'Cassius Leclemaine',
                'region' => 'Mt. Scarab Research Center',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/b/b0/Cassius_Intro.png/revision/latest/scale-to-width-down/310?cb=20180717043511',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '56',
                'name' => 'Uranus',
                'region' => 'Helios Fallen',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/2/25/Download_%282%29.jpeg/revision/latest/scale-to-width-down/310?cb=20190612182054',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
            [
                'id' => '57',
                'name' => 'New Pandoran Soldiers',
                'region' => 'Any Location in Commander Lillith\'s Fight for Sanctuary',
                'image_url' => '',
                'game_id' => '2',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
            ],
        ]);
    }
}
