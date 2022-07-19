<?php

namespace Database\Seeders;

use App\Models\Game;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Game::create([
            'game_name' => 'oddeven',
            'total_played' => 0,
            'winchance' => '50%',
            'image' =>'FILE/IMAGE/odd-Even_cover.png',
            'status' => 2,
        ]);
        Game::create([
            'game_name' => 'ludo',
            'total_played' => 0,
            'winchance' => '50%',
            'image' =>'FILE/IMAGE/ludo.png',
            'status' => 2,
        ]);
        Game::create([
            'game_name' => 'headtail',
            'total_played' => 0,
            'winchance' => '50%',
            'image' =>'FILE/IMAGE/headteil.png',
            'status' => 2,
        ]);
        Game::create([
            'game_name' => 'spin',
            'total_played' => 0,
            'winchance' => '50%',
            'image' =>'FILE/IMAGE/EpAsP.gif',
            'status' => 2,
        ]);
        Game::create([
            'game_name' => 'teenpaty',
            'total_played' => 0,
            'winchance' => '50%',
            'image' =>'FILE/IMAGE/teenpaty.png',
            'status' => 2,
        ]);
        Game::create([
            'game_name' => 'tomjare',
            'total_played' => 0,
            'winchance' => '50%',
            'image' =>'FILE/IMAGE/tomengery.png',
            'status' => 2,
        ]);
    }
}
