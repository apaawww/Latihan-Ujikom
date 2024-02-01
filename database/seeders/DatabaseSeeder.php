<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Absensi;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin1@gmail.com',
            'username' => 'admin1',
            'password' => bcrypt('123456'),
            'level' => 'admin'
        ]);
        User::create([
            'name' => 'Operator1',
            'email' => 'operator1@gmail.com',
            'username' => 'operator1',
            'password' => bcrypt('123456'),
            'level' => 'operator'
        ]);
        User::create([
            'name' => 'Operator2',
            'email' => 'operator2@gmail.com',
            'username' => 'operator2',
            'password' => bcrypt('123456'),
            'level' => 'operator'
        ]);
        
        Absensi::create([
            'tanggal' => date('Y-m-d'),
            'id_user' => '1'
        ]);
    }
}
