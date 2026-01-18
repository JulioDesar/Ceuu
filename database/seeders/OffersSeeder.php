<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OfferSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $offers = [
            // Steam offers
            ['game_id' => 1, 'platform_id' => 1, 'price' => 199.90, 'is_active' => true],
            ['game_id' => 2, 'platform_id' => 1, 'price' => 79.90, 'is_active' => true],
            ['game_id' => 3, 'platform_id' => 1, 'price' => 249.90, 'is_active' => true],
            ['game_id' => 5, 'platform_id' => 1, 'price' => 259.90, 'is_active' => true],
            ['game_id' => 9, 'platform_id' => 1, 'price' => 229.90, 'is_active' => true],
            ['game_id' => 10, 'platform_id' => 1, 'price' => 299.90, 'is_active' => true],
            ['game_id' => 13, 'platform_id' => 1, 'price' => 149.90, 'is_active' => true],
            
            // Epic Games Store offers
            ['game_id' => 4, 'platform_id' => 2, 'price' => 89.90, 'is_active' => true],
            ['game_id' => 8, 'platform_id' => 2, 'price' => 279.90, 'is_active' => true],
            ['game_id' => 11, 'platform_id' => 2, 'price' => 349.90, 'is_active' => true],
            ['game_id' => 16, 'platform_id' => 2, 'price' => 249.90, 'is_active' => true],
            
            // PlayStation 5 offers
            ['game_id' => 6, 'platform_id' => 3, 'price' => 349.90, 'is_active' => true],
            ['game_id' => 7, 'platform_id' => 3, 'price' => 199.90, 'is_active' => true],
            ['game_id' => 14, 'platform_id' => 3, 'price' => 299.90, 'is_active' => true],
            ['game_id' => 15, 'platform_id' => 3, 'price' => 349.90, 'is_active' => true],
            
            // Xbox Series X|S offers
            ['game_id' => 3, 'platform_id' => 5, 'price' => 249.90, 'is_active' => true],
            ['game_id' => 10, 'platform_id' => 5, 'price' => 299.90, 'is_active' => true],
            ['game_id' => 13, 'platform_id' => 5, 'price' => 149.90, 'is_active' => true],
            
            // Nintendo Switch offers
            ['game_id' => 12, 'platform_id' => 7, 'price' => 299.90, 'is_active' => true],
            
            // GOG offers
            ['game_id' => 1, 'platform_id' => 8, 'price' => 189.90, 'is_active' => true],
            ['game_id' => 2, 'platform_id' => 8, 'price' => 69.90, 'is_active' => true],
        ];

        foreach ($offers as $offer) {
            DB::table('offers')->insert([
                'game_id' => $offer['game_id'],
                'platform_id' => $offer['platform_id'],
                'price' => $offer['price'],
                'currency' => 'BRL',
                'is_active' => $offer['is_active'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
