<?php

namespace Database\Seeders;

// use App\Models\User;

use App\Models\User;
use Database\Seeders\SpatiePermissions\UserPermissionConfigurationSeeder;
use Database\Seeders\SpatiePermissions\UserPermissionGlobalSeeder;
use Database\Seeders\SpatiePermissions\UserPermissionUserSeeder;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        if (env('APP_DEBUG') == false) {
            $this->call([
                UserPermissionUserSeeder::class,
                UserPermissionConfigurationSeeder::class,
                UserPermissionGlobalSeeder::class,
            ]);
        } else {
            $this->call([
                UserPermissionUserSeeder::class,
                UserPermissionConfigurationSeeder::class,
                UserPermissionGlobalSeeder::class,          
            ]);
        }

        // User::factory(10)->create();

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'cpf' => '123.456.789-00',
            'password' => Hash::make('password'),
        ])->assignRole('super_admin');
    }
}
