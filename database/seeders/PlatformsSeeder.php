<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $platforms = [
            ['name' => 'Steam'],
            ['name' => 'Epic Games Store'],
            ['name' => 'PlayStation 5'],
            ['name' => 'PlayStation 4'],
            ['name' => 'Xbox Series X|S'],
            ['name' => 'Xbox One'],
            ['name' => 'Nintendo Switch'],
            ['name' => 'GOG'],
            ['name' => 'Origin'],
            ['name' => 'Ubisoft Connect'],
            ['name' => 'Battle.net'],
            ['name' => 'Microsoft Store'],
        ];

        foreach ($platforms as $platform) {
            DB::table('plataforms')->insert([
                'name' => $platform['name'],
                'created_at' => now(),
            ]);
        }
    }
}
