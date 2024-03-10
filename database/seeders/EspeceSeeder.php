<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EspeceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('especes')->insert([
            'nom' => 'Chêne',
        ]);

        DB::table('especes')->insert([
            'nom' => 'Hêtre',
        ]);

        DB::table('especes')->insert([
            'nom' => 'Erable',
        ]);

        DB::table('especes')->insert([
            'nom' => 'Charme',
        ]);

        DB::table('especes')->insert([
            'nom' => 'Genévrier',
        ]);

        DB::table('especes')->insert([
            'nom' => 'Buis',
        ]);
    }
}
