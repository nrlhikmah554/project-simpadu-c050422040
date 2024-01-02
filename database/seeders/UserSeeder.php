<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(30)->create();

        User::create([
            'name' => 'Nurul Hikmah',
            'email' => 'c050422040@mahasiswa.poliban.ac.id',
            'email_verified_at' => now(),
            'password' => Hash::make('123456789'),
            'roles' => 'mahasiswa',
        ]);
    }
}
