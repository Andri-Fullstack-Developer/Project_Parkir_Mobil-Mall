<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();
        
        User::create([
            'name' => 'Andri',
            'username' => 'jago86',
            'email' => 'jago@admin.com',
            'petugas' => 'masuk',
            'password' => bcrypt('jagoan'), //jagoan
        ]);
        
        User::create([
            'name' => 'firman',
            'username' => 'firmantole',
            'email' => 'tole@admin.com',
            'petugas' => 'keluar',
            'password' => bcrypt('toletole'), //jagoan
        ]);
    }
}
