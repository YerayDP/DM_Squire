<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Spell::class)->create(['name' => 'Acid Arrow', 'school' => 'Evocation', 
        'level' => '2nd','casting_time' => 'Action', 'range' 
        => '90ft', 'components' => 'V,S,M  (powdered rhubarb leaf and an adder`s stomach)',
        'duration' => 'Instantaneous', 'description' => 'a', 'spellDMG' => '1', 
        'description' => 'A shimmering green arrow streaks toward a target within range and bursts in a spray of acid. Make a ranged spell attack against the target. On a hit, the target takes 4d4 acid damage immediately and 2d4 acid damage at the end of its next turn. On a miss, the arrow splashes the target with acid for half as much of the initial damage and no damage at the end of its next turn.',
         'spellDMG' => '4d4', 'spellAHL' => '1d4', 'spellList' => 'WIZARD,CIRCLE OF THE LAND (SWAMP), ALCHEMIST'],);
        factory(\App\User::class)->create(['firstname' => 'Yeray', 'secondname' => 'Dominguez Pavón', 
        'email' => 'y@admin.com','password' => Hash::make('12345678'), 'actived' 
        => '1', 'type' => 'a', 'phone'=>'110919999']);
         
    }
}
