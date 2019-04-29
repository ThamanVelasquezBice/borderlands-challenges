<?php

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Legendaries;
use Carbon\Carbon;

class LegendariesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Legendaries::insert([
            [
                'id' => '1',
                'name' => 'Madhous!',
                'flavor_text' => 'It\'s a Madhouse, A MADHOUSE!!!!',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/0/0e/AkurateMadhouslvl50.jpg/revision/latest/scale-to-width-down/620?cb=20130116030254',
                'gun_brand_id' => '1',
                'item_type_id' => '7',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '2',
                'name' => 'Veruc',
                'flavor_text' => 'I want that rifle, Daddy!',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/9/94/Veruc.jpg/revision/latest/scale-to-width-down/619?cb=20161204073336',
                'gun_brand_id' => '2',
                'item_type_id' => '7',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '3',
                'name' => 'Hammer Buster',
                'flavor_text' => 'Gar! Gorarr! My dad\'s a scientist! GWARRRR!!!!',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/3/31/2012-10-21_00001.jpg/revision/latest/scale-to-width-down/619?cb=20121021205400',
                'gun_brand_id' => '4',
                'item_type_id' => '7',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '4',
                'name' => 'KerBlaster',
                'flavor_text' => 'Torgue got more BOOM!',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/b/b0/2013-04-09_00001.jpg/revision/latest/scale-to-width-down/619?cb=20130409063421',
                'gun_brand_id' => '7',
                'item_type_id' => '7',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '5',
                'name' => 'Ogre',
                'flavor_text' => 'Ogres chew their food.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/5/56/Lv61_Nasty_Ogre.jpg/revision/latest/scale-to-width-down/619?cb=20130722030705',
                'gun_brand_id' => '7',
                'item_type_id' => '7',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '6',
                'name' => 'Shredifier',
                'flavor_text' => 'Speed Kills.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/8/85/Exspansive_Shredifier_50.jpg/revision/latest/scale-to-width-down/619?cb=20121209014136',
                'gun_brand_id' => '8',
                'item_type_id' => '7',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '7',
                'name' => 'Legendary Reaper',
                'flavor_text' => 'This is gonna get ugly.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/0/0b/Legendary_Reaper_Mod.jpg/revision/latest/scale-to-width-down/620?cb=20131026163733',
                'gun_brand_id' => '1',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '8',
                'name' => 'Legendary Sickle',
                'flavor_text' => 'You\'re entering a world of pain.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/7/72/2013-09-17_00001.jpg/revision/latest/scale-to-width-down/619?cb=20130917195818',
                'gun_brand_id' => '1',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '9',
                'name' => 'Legendary Torch',
                'flavor_text' => 'Embrace the deep dark warmth.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/c/c6/Legendarytorch.jpg/revision/latest/scale-to-width-down/619?cb=20130911061133',
                'gun_brand_id' => '1',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '10',
                'name' => 'Slayer of Terramorphous',
                'flavor_text' => '',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/0/09/2012-10-17_00001.jpg/revision/latest/scale-to-width-down/619?cb=20121017121416',
                'gun_brand_id' => '5',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '11',
                'name' => 'Legendary Ranger',
                'flavor_text' => 'Wanna know why I got these scars?',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/b/b4/Legendary_ranger.jpg/revision/latest/scale-to-width-down/619?cb=20130911145637',
                'gun_brand_id' => '9',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '12',
                'name' => 'Legendary Engineer',
                'flavor_text' => 'Engineered for perfection',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/1/15/LegendaryEngineer.jpg/revision/latest/scale-to-width-down/620?cb=20140819025612',
                'gun_brand_id' => '2',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '13',
                'name' => 'Legendary Soldier',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '14',
                'name' => 'Legendary Nurse',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '15',
                'name' => 'Legendary Killer',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '16',
                'name' => 'Legendary Mechromancer',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '17',
                'name' => 'Legendary Roboteer',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '18',
                'name' => 'Legendary Cat',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '19',
                'name' => 'Legendary Hunter',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '20',
                'name' => 'Legendary Sniper',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '21',
                'name' => 'Legendary Psycho',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '22',
                'name' => 'Legendary Berserker',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '23',
                'name' => 'Legendary Titan',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '24',
                'name' => 'Legendary Siren',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '25',
                'name' => 'Legendary Pointman',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '26',
                'name' => 'Legendary Ninja',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '27',
                'name' => 'Legendary Catalyst',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '28',
                'name' => 'Legendary Binder',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '29',
                'name' => 'Legendary Gunzerker',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '30',
                'name' => 'Legendary Hoarder',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '31',
                'name' => 'Legendary Anarchist',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '32',
                'name' => 'Nasty Surprise',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '33',
                'name' => 'Quasar',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '34',
                'name' => 'Bouncing Bonny',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '35',
                'name' => 'Fastball',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '36',
                'name' => 'Chain Lightning',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '37',
                'name' => 'Leech',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '38',
                'name' => 'Fire Storm',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '39',
                'name' => 'Rolling Thunder',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '40',
                'name' => 'Bonus Package',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '41',
                'name' => 'Fire Bee',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '42',
                'name' => 'Pandemic',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '43',
                'name' => 'Storm Front',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '44',
                'name' => 'Maggie',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '45',
                'name' => 'Unkempt Harold',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '46',
                'name' => 'Blood of Terramorphous',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '47',
                'name' => 'Logan\'s Gun',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '48',
                'name' => 'Gub',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '49',
                'name' => 'Hornet',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '50',
                'name' => 'Gunerand',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '51',
                'name' => 'Thunderball Fists',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '52',
                'name' => 'Infinity',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '53',
                'name' => 'Badaboom',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '54',
                'name' => 'Norfleet',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '55',
                'name' => 'Pyrophobia',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '56',
                'name' => 'Nukem',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '57',
                'name' => 'Bunny',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '58',
                'name' => 'Mongol',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '59',
                'name' => 'The Transformer',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '60',
                'name' => 'The Sham',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '61',
                'name' => 'Neogenator',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '62',
                'name' => 'The Bee',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '63',
                'name' => 'Whisky Tango Foxtrot',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '64',
                'name' => 'Flame of the Firehawk',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '65',
                'name' => 'Black Hole',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '66',
                'name' => 'Impaler',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '67',
                'name' => 'The Cradle',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '68',
                'name' => 'Hide of Terramorphous',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '69',
                'name' => 'Fabled Tortoise',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '70',
                'name' => 'Striker',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '71',
                'name' => 'Conference Call',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '72',
                'name' => 'Sledge\'s Shotgun',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '73',
                'name' => 'Deliverance',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '74',
                'name' => 'Flakker',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '75',
                'name' => 'Skullmasher',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '76',
                'name' => 'Invader',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '77',
                'name' => 'Longbow',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '78',
                'name' => 'Pitchfork',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '79',
                'name' => 'Volcano',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '80',
                'name' => 'Lyuda',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '81',
                'name' => 'Bitch',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '82',
                'name' => 'Emperor',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '83',
                'name' => 'Slagga',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '84',
                'name' => 'Hellfire',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '85',
                'name' => 'Baby Maker',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '',
                'game_id' => '2',
                'loot_source_id' => ''
            ]
        ]);
    }
}
