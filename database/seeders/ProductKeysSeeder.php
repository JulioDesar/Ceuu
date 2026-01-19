<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductKeySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Gerar 3-5 chaves para cada oferta (IDs de 1 a 21)
        for ($offerId = 1; $offerId <= 21; $offerId++) {
            $keyCount = rand(3, 5);
            
            for ($i = 0; $i < $keyCount; $i++) {
                // Gerar chave aleatória no formato XXXXX-XXXXX-XXXXX-XXXXX
                $key = strtoupper(
                    Str::random(5) . '-' . 
                    Str::random(5) . '-' . 
                    Str::random(5) . '-' . 
                    Str::random(5)
                );
                
                // Algumas chaves já foram usadas (20% de chance)
                $usedAt = rand(1, 100) <= 20 ? now()->subDays(rand(1, 30)) : null;
                
                DB::table('product_keys')->insert([
                    'offer_id' => $offerId,
                    'key' => $key,
                    'used_at' => $usedAt,
                    'created_at' => now(),
                ]);
            }
        }
    }
}
