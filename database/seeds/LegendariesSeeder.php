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
                'flavor_text' => 'It\'s like Christmas',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/2/2b/2012-12-20_00005.jpg/revision/latest/scale-to-width-down/619?cb=20121220132219',
                'gun_brand_id' => '2',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '14',
                'name' => 'Legendary Nurse',
                'flavor_text' => 'A friend',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/c/cc/Nurse.png/revision/latest/scale-to-width-down/620?cb=20140819024346',
                'gun_brand_id' => '9',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '15',
                'name' => 'Legendary Killer',
                'flavor_text' => 'Well, that escalated quickly.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/2/23/2014-02-07_00003.jpg/revision/latest/scale-to-width-down/619?cb=20140207182459',
                'gun_brand_id' => '3',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '16',
                'name' => 'Legendary Mechromancer',
                'flavor_text' => 'I am such a B.A.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/c/c9/Legendary_mechromancer_class_mod.jpg/revision/latest/scale-to-width-down/619?cb=20121219222317',
                'gun_brand_id' => '3',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '17',
                'name' => 'Legendary Roboteer',
                'flavor_text' => 'Science, my sweetest valentine!',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/b/b9/Legendary_Roboteer.png/revision/latest/scale-to-width-down/620?cb=20140819025829',
                'gun_brand_id' => '3',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '18',
                'name' => 'Legendary Cat',
                'flavor_text' => 'Rawr.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/0/0f/Legendary_cat.jpg/revision/latest/scale-to-width-down/619?cb=20130907052554',
                'gun_brand_id' => '3',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '19',
                'name' => 'Legendary Hunter',
                'flavor_text' => 'I never die.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/0/04/BL2_Legendary_Hunter_Class.jpg/revision/latest/scale-to-width-down/619?cb=20121007060655',
                'gun_brand_id' => '4',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '20',
                'name' => 'Legendary Sniper',
                'flavor_text' => 'Boom! Headshot.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/f/f1/LegendarySniper.jpg/revision/latest/scale-to-width-down/620?cb=20140819030220',
                'gun_brand_id' => '4',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '21',
                'name' => 'Legendary Psycho',
                'flavor_text' => '- One day I\'ll escape this hell and you\'ll be gone.
                                  - NIPPLE SALADS!',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/c/ce/Legendary_Psycho.png/revision/latest/scale-to-width-down/619?cb=20130419145241',
                'gun_brand_id' => '2',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '22',
                'name' => 'Legendary Berserker',
                'flavor_text' => 'Never look at my fist.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/0/0f/2012-12-21_00001.jpg/revision/latest/scale-to-width-down/619?cb=20121221201336',
                'gun_brand_id' => '1',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '23',
                'name' => 'Legendary Titan',
                'flavor_text' => 'Challenge accepted.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/1/10/Legendary_titan_lvl63.jpg/revision/latest/scale-to-width-down/619?cb=20130909064556',
                'gun_brand_id' => '9',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '24',
                'name' => 'Legendary Siren',
                'flavor_text' => '(Giggles) I\'m really good at this.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/d/dd/Fry_legendary_siren.jpg/revision/latest/scale-to-width-down/619?cb=20121221013422',
                'gun_brand_id' => '5',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '25',
                'name' => 'Legendary Pointman',
                'flavor_text' => 'Point taken.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/c/c7/2013-11-02_00002.jpg/revision/latest/scale-to-width-down/620?cb=20131102142759',
                'gun_brand_id' => '10',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '26',
                'name' => 'Legendary Ninja',
                'flavor_text' => 'In the midst of combat, keep stillness inside of you.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/d/d2/Symoniz.jpg/revision/latest/scale-to-width-down/620?cb=20130919044352',
                'gun_brand_id' => '5',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '27',
                'name' => 'Legendary Catalyst',
                'flavor_text' => 'Shocking, isn\'t it?',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/0/0a/2013-09-04_00004.jpg/revision/latest/scale-to-width-down/620?cb=20130905004533',
                'gun_brand_id' => '5',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '28',
                'name' => 'Legendary Binder',
                'flavor_text' => 'Please hold.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/e/e1/Legendary_binder.jpg/revision/latest/scale-to-width-down/619?cb=20130911163738',
                'gun_brand_id' => '5',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '29',
                'name' => 'Legendary Gunzerker',
                'flavor_text' => 'Nobody puts this baby in a corner.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/f/f0/Legendary_Gunzerker.jpg/revision/latest/scale-to-width-down/619?cb=20130914033715',
                'gun_brand_id' => '7',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '30',
                'name' => 'Legendary Hoarder',
                'flavor_text' => 'Ain\'t got time for dilly-dally',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/d/d8/Legendary_Hoarder.png/revision/latest/scale-to-width-down/619?cb=20131016145441',
                'gun_brand_id' => '8',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '31',
                'name' => 'Legendary Anarchist',
                'flavor_text' => 'Chaos is a friend of mine.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/3/30/Ann.png/revision/latest/scale-to-width-down/620?cb=20140819023916',
                'gun_brand_id' => '8',
                'item_type_id' => '4',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '32',
                'name' => 'Nasty Surprise',
                'flavor_text' => 'Supplies!',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/8/84/Snap007.jpg/revision/latest/scale-to-width-down/620?cb=20121009124928',
                'gun_brand_id' => '3',
                'item_type_id' => '1',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '33',
                'name' => 'Quasar',
                'flavor_text' => 'E=mc^(OMG)/wtf ',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/d/d4/Quasar_1920.jpg/revision/latest/scale-to-width-down/620?cb=20121227103443',
                'gun_brand_id' => '3',
                'item_type_id' => '1',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '34',
                'name' => 'Bouncing Bonny',
                'flavor_text' => 'Your sister is such a bitch.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/e/ec/Bonnie.jpg/revision/latest/scale-to-width-down/620?cb=20121024003418',
                'gun_brand_id' => '2',
                'item_type_id' => '1',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '35',
                'name' => 'Fastball',
                'flavor_text' => 'Forget the curveball Ricky, give him the heater.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/2/2f/2013-10-25_00001.jpg/revision/latest/scale-to-width-down/620?cb=20131025160502',
                'gun_brand_id' => '6',
                'item_type_id' => '1',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '36',
                'name' => 'Chain Lightning',
                'flavor_text' => 'Don\'t pay it back, pay it forward.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/a/a1/Chain_lightning.png/revision/latest?cb=20130626161122',
                'gun_brand_id' => '5',
                'item_type_id' => '1',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '37',
                'name' => 'Leech',
                'flavor_text' => 'A skillful leech is better far, than half a hundred men of war.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/e/ee/Leech.jpg/revision/latest/scale-to-width-down/619?cb=20120928194618',
                'gun_brand_id' => '5',
                'item_type_id' => '1',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '38',
                'name' => 'Fire Storm',
                'flavor_text' => 'What manner of man are you that can summon up fire without flint or tinder?',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/6/60/Fire_storm.png/revision/latest?cb=20130626161352',
                'gun_brand_id' => '5',
                'item_type_id' => '1',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '39',
                'name' => 'Rolling Thunder',
                'flavor_text' => 'The thunder shall bring forth the pain!',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/6/65/Rolling_Thunder.jpg/revision/latest/scale-to-width-down/619?cb=20120928221904',
                'gun_brand_id' => '7',
                'item_type_id' => '1',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '40',
                'name' => 'Bonus Package',
                'flavor_text' => '2x more awesome, bonus extreme!',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/2/24/Sticky_Homing_Bonus_P.jpg/revision/latest/scale-to-width-down/620?cb=20121222185646',
                'gun_brand_id' => '7',
                'item_type_id' => '1',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '41',
                'name' => 'Fire Bee',
                'flavor_text' => 'Bees are coming!',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/0/09/Fire_Bee.jpg/revision/latest/scale-to-width-down/619?cb=20121021062545',
                'gun_brand_id' => '8',
                'item_type_id' => '1',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '42',
                'name' => 'Pandemic',
                'flavor_text' => 'Spread the sickness.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/3/3b/Vladof_Pandemic.jpg/revision/latest/scale-to-width-down/620?cb=20130417150719',
                'gun_brand_id' => '8',
                'item_type_id' => '1',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '43',
                'name' => 'Storm Front',
                'flavor_text' => 'Sometimes lightning does strike twice',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/a/a2/Homing_Storm_Front.jpg/revision/latest/scale-to-width-down/620?cb=20121004104231',
                'gun_brand_id' => '8',
                'item_type_id' => '1',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '44',
                'name' => 'Maggie',
                'flavor_text' => 'Monty\'s wife don\'t take no guff.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/7/76/Pistol_Jakobs_Maggie_%28Inspect_View%29.jpg/revision/latest/scale-to-width-down/619?cb=20170706163635',
                'gun_brand_id' => '4',
                'item_type_id' => '6',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '45',
                'name' => 'Unkempt Harold',
                'flavor_text' => 'Did I fire six shots, or only five? Three? Seven. Whatever.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/1/19/Pistol_Torgue_Unkempt_Harold_%28Inspect_View%29.jpg/revision/latest/scale-to-width-down/619?cb=20170706162939',
                'gun_brand_id' => '7',
                'item_type_id' => '6',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '46',
                'name' => 'Blood of Terramorphous',
                'flavor_text' => '...His blood could inspire...',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/6/61/Blood.jpg/revision/latest/scale-to-width-down/620?cb=20121008032829',
                'gun_brand_id' => '11',
                'item_type_id' => '3',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '47',
                'name' => 'Logan\'s Gun',
                'flavor_text' => 'Gun, Gunner!',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/9/91/Logan%27s_Gun_50.jpg/revision/latest/scale-to-width-down/619?cb=20121123122848',
                'gun_brand_id' => '3',
                'item_type_id' => '6',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '48',
                'name' => 'Gub',
                'flavor_text' => 'Abt Natural',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/0/03/Double_Gub.png/revision/latest/scale-to-width-down/620?cb=20121026174019',
                'gun_brand_id' => '1',
                'item_type_id' => '6',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '49',
                'name' => 'Hornet',
                'flavor_text' => 'Fear the Swarm!',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/3/3f/2013-05-29_00001.jpg/revision/latest/scale-to-width-down/620?cb=20130530024953',
                'gun_brand_id' => '2',
                'item_type_id' => '6',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '50',
                'name' => 'Gunerang',
                'flavor_text' => 'Give it a burl.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/a/ab/Pistol_Tediore_Gunerang_%28Inspect_View%29.jpg/revision/latest/scale-to-width-down/619?cb=20170706163245',
                'gun_brand_id' => '6',
                'item_type_id' => '6',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '51',
                'name' => 'Thunderball Fists',
                'flavor_text' => 'I can have such a thing?',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/0/0b/Pistol_Maliwan_Thunderball_Fists_%28Inspect_View%29.jpg/revision/latest/scale-to-width-down/619?cb=20170706163504',
                'gun_brand_id' => '5',
                'item_type_id' => '6',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '52',
                'name' => 'Infinity',
                'flavor_text' => 'It\'s closer than you think! (no it isn\'t)',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/e/e3/Pistol_Vladof_Infinity_%28Inspect_View%29.jpg/revision/latest/scale-to-width-down/619?cb=20170706162536',
                'gun_brand_id' => '8',
                'item_type_id' => '6',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '53',
                'name' => 'Badaboom',
                'flavor_text' => 'Multi-kill.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/f/fe/Rocket_Launcher_Bandit_Badaboom_%28Inspect_View%29.jpg/revision/latest/scale-to-width-down/619?cb=20170706161729',
                'gun_brand_id' => '7',
                'item_type_id' => '9',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '54',
                'name' => 'Norfleet',
                'flavor_text' => 'Blows Up Everything!!!',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/7/75/BL2_Norfleet.jpg/revision/latest/scale-to-width-down/619?cb=20121007060720',
                'gun_brand_id' => '5',
                'item_type_id' => '9',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '55',
                'name' => 'Pyrophobia',
                'flavor_text' => 'It\'s actually a fairly rational fear in this case.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/d/d0/Rocket_Launcher_Maliwan_Pyrophobia_%28Inspect_View%29.jpg/revision/latest/scale-to-width-down/619?cb=20170706162233',
                'gun_brand_id' => '5',
                'item_type_id' => '9',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '56',
                'name' => 'Nukem',
                'flavor_text' => 'Name Dropper.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/8/84/Nukem_transparant.png/revision/latest/scale-to-width-down/619?cb=20180210193547',
                'gun_brand_id' => '7',
                'item_type_id' => '9',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '57',
                'name' => 'Bunny',
                'flavor_text' => 'Hippity Hoppity!',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/8/84/Rocket_Launcher_Tediore_Bunny_%28Inspect_View%29.jpg/revision/latest/scale-to-width-down/619?cb=20170706162000',
                'gun_brand_id' => '6',
                'item_type_id' => '9',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '58',
                'name' => 'Mongol',
                'flavor_text' => 'The Horde will always return!',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/4/44/Rocket_Launcher_Vladof_Mongol_%28Inspect_View%29.jpg/revision/latest/scale-to-width-down/619?cb=20170706161020',
                'gun_brand_id' => '8',
                'item_type_id' => '9',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '59',
                'name' => 'The Transformer',
                'flavor_text' => 'There\'s more than your eye can see.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/2/2a/2012-12-27_00001.jpg/revision/latest/scale-to-width-down/250?cb=20121228020537',
                'gun_brand_id' => '8',
                'item_type_id' => '2',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '60',
                'name' => 'The Sham',
                'flavor_text' => 'Wow, I CAN do this all day.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/a/a7/The_Sham.jpg/revision/latest/scale-to-width-down/250?cb=20121211191819',
                'gun_brand_id' => '8',
                'item_type_id' => '2',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '61',
                'name' => 'Neogenator',
                'flavor_text' => 'For an impenetrable shield stand inside yourself',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/2/2f/Fry_neogenator.jpg/revision/latest/scale-to-width-down/250?cb=20130217213906',
                'gun_brand_id' => '9',
                'item_type_id' => '2',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '62',
                'name' => 'The Bee',
                'flavor_text' => 'Float like a butterfly...',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/9/97/NOhara_The_Bee.jpg/revision/latest/scale-to-width-down/250?cb=20121115015841',
                'gun_brand_id' => '3',
                'item_type_id' => '2',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '63',
                'name' => 'Whisky Tango Foxtrot',
                'flavor_text' => 'Situation normal... ...all foxtrored up.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/b/bf/Whisky_Tango_Foxtrot.png/revision/latest/scale-to-width-down/250?cb=20120924114043',
                'gun_brand_id' => '2',
                'item_type_id' => '2',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '64',
                'name' => 'Flame of the Firehawk',
                'flavor_text' => 'From the ashes she will rise.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/1/10/Flame_of_the_Firehawk.jpg/revision/latest/scale-to-width-down/250?cb=20121212005343',
                'gun_brand_id' => '5',
                'item_type_id' => '2',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '65',
                'name' => 'Black Hole',
                'flavor_text' => 'You are the center of the universe.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/9/9d/Black_Hole.png/revision/latest/scale-to-width-down/250?cb=20121111173932',
                'gun_brand_id' => '5',
                'item_type_id' => '2',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '66',
                'name' => 'Impaler',
                'flavor_text' => 'Vlad would be proud.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/1/12/BL2_Impaler.jpg/revision/latest/scale-to-width-down/250?cb=20121003083949',
                'gun_brand_id' => '5',
                'item_type_id' => '2',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '67',
                'name' => 'The Cradle',
                'flavor_text' => '...to the grave.',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/0/02/BlastproofTheCradle1.png/revision/latest/scale-to-width-down/250?cb=20121022094510',
                'gun_brand_id' => '6',
                'item_type_id' => '2',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '68',
                'name' => 'Hide of Terramorphous',
                'flavor_text' => '...His hide turned the mightiest tame...',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/a/ac/Hideofterry.jpg/revision/latest/scale-to-width-down/250?cb=20121008165216',
                'gun_brand_id' => '1',
                'item_type_id' => '2',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '69',
                'name' => 'Fabled Tortoise',
                'flavor_text' => 'Win by a hare',
                'image_url' => 'https://vignette.wikia.nocookie.net/borderlands/images/8/85/Fry_f_tortoise.jpg/revision/latest/scale-to-width-down/619?cb=20130217214227',
                'gun_brand_id' => '10',
                'item_type_id' => '2',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '70',
                'name' => 'Striker',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '8',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '71',
                'name' => 'Conference Call',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '8',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '72',
                'name' => 'Sledge\'s Shotgun',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '8',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '73',
                'name' => 'Deliverance',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '8',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '74',
                'name' => 'Flakker',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '8',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '75',
                'name' => 'Skullmasher',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '8',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '76',
                'name' => 'Invader',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '10',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '77',
                'name' => 'Longbow',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '10',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '78',
                'name' => 'Pitchfork',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '10',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '79',
                'name' => 'Volcano',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '10',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '80',
                'name' => 'Lyuda',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '10',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '81',
                'name' => 'Bitch',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '5',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '82',
                'name' => 'Emperor',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '5',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '83',
                'name' => 'Slagga',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '5',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '84',
                'name' => 'Hellfire',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '5',
                'game_id' => '2',
                'loot_source_id' => ''
            ],
            [
                'id' => '85',
                'name' => 'Baby Maker',
                'flavor_text' => '',
                'image_url' => '',
                'gun_brand_id' => '',
                'item_type_id' => '5',
                'game_id' => '2',
                'loot_source_id' => ''
            ]
        ]);
    }
}
