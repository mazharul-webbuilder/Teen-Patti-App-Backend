<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class DeckSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('decks')->insert([
            [
                'name' => 'Deck1',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Deck2',
                'created_at' => Carbon::now()
            ],
            [
                'name' => 'Deck3',
                'created_at' => Carbon::now()
            ]
        ]);
    }
}
