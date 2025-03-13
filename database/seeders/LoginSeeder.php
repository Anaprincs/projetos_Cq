<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::Create([
            'name' => 'Admin',
            'email' => 'admin@teste.com',
            'password' =>Hash::make(123456),
            'role' =>'admin'
        ]);

        User::Create([
            'name' => 'User',
            'email' => 'user@teste.com',
            'password' => Hash::make(123456),
            'role' =>'user'
        ]);
    }
}
