<?php

namespace Database\Seeders;

// use App\Models\User;
use Database\Seeders\SpatiePermissions\UserPermissionConfigurationSeeder;
use Database\Seeders\SpatiePermissions\UserPermissionGlobalSeeder;
use Database\Seeders\SpatiePermissions\UserPermissionStudentSeeder;
use Database\Seeders\SpatiePermissions\UserPermissionTutorSeeder;
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
        // User::factory(10)->create();

        //User::factory()->create([
        //    'name' => 'Test User',
        //    'cpf' => '12345678912',
        //    'email' => 'user@example.com',
        //    'password' => Hash::make('user'),
        //]);

        //User::create([
        //    'name' => 'Matheus',
        //    'cpf' => '11078909423',
        //    'email' => 'matheus.mat96@hotmail.com',
        //    'password' => Hash::make('11078909423'),
        //]);

        if (env('APP_DEBUG') == false) {
            $this->call([
                UserPermissionUserSeeder::class,
                UserPermissionStudentSeeder::class,
                UserPermissionTutorSeeder::class,
                UserPermissionConfigurationSeeder::class,
                UserPermissionGlobalSeeder::class,
            ]);            
        } else {
            $this->call([
                UserPermissionUserSeeder::class,
                UserPermissionStudentSeeder::class,
                UserPermissionTutorSeeder::class,
                UserPermissionConfigurationSeeder::class,
                UserPermissionGlobalSeeder::class,
                UserSeeder::class,
                ReflectionSeeder::class,
                ExerciseSeeder::class,
                PresentialActivitySeeder::class,
                ProfessionSeeder::class,                
            ]);
        }
    }
}
