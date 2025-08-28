<?php

namespace Database\Seeders;

// use App\Models\User;

use App\Models\User;
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

        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'cpf' => '123.456.789-00',
            'password' => Hash::make('password'),
            'contact' => '123456789',
        ])->givePermissionTo(['super_admin']);

        if (env('APP_DEBUG') == false) {
            $this->call([]);            
        } else {
            $this->call([]);
        }
    }
}
