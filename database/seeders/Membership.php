<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class Membership extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $frases = [
            'Lider',
            'Secretario',
            'Vocal'
        ];

        $faker = Faker::create();

        foreach (range(1, 30) as $index) {
            DB::table('memberships')->where('id', $index)->update([
                'position' => $frases[array_rand($frases)],
            ]);
        }
    }
}