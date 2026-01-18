<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $games = [
            'Cyberpunk 2077',
            'The Witcher 3: Wild Hunt',
            'Red Dead Redemption 2',
            'Grand Theft Auto V',
            'Elden Ring',
            'God of War',
            'Resident Evil Village',
            'Hogwarts Legacy',
            'Baldur\'s Gate 3',
            'Starfield',
            'Call of Duty: Modern Warfare III',
            'FIFA 24',
            'Forza Horizon 5',
            'Spider-Man Remastered',
            'The Last of Us Part I',
            'Assassin\'s Creed Mirage',
            'Mortal Kombat 1',
            'Counter-Strike 2',
            'Valorant',
            'League of Legends',
        ];

        foreach ($games as $game) {
            DB::table('game')->insert([
                'name' => $game,
                'slug' => Str::slug($game),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
