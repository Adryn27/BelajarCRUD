<?php

namespace Database\Seeders;

use App\Models\Anggota;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Anggota::create([
            'nama' => 'Willy Andryan',
            'hp' => '08123456789'
        ]);
        Anggota::create([
            'nama' => 'Danu Pangestu',
            'hp' => '08234567891'
        ]);
        Anggota::create([
            'nama' => 'Eka Setiawan',
            'hp' => '08345678912'
        ]);
    }
}
