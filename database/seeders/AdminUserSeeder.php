<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@maseducare.com'],
            [
                'name'     => 'MAS Admin',
                'email'    => 'admin@maseducare.com',
                'password' => Hash::make('MASAdmin@2025'),
                'is_admin' => true,
            ]
        );
    }
}
