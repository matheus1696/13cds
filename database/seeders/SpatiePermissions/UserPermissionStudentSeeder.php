<?php

namespace Database\Seeders\SpatiePermissions;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserPermissionStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void 
    {
        // Configurações
        Permission::create(['name' => 'user_students', 'display_name' => 'Estudantes']);

        // Criando roles com nomes consistentes
        $tutor = Role::create([
            'name' => 'students',
            'display_name' => 'Acesso para Área do Estudante',
            'description' => 'Permite acesso a área do estudante.'
        ]);
        
        $tutor->givePermissionTo(['user_students',]);
    }
}
