<?php

namespace Database\Seeders\SpatiePermissions;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserPermissionTutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void 
    {
        // Configurações
        Permission::create(['name' => 'tutor_evaluate', 'display_name' => 'Avaliação de Trabalhos']);

        // Criando roles com nomes consistentes
        $tutor = Role::create([
            'name' => 'tutor',
            'display_name' => 'Acesso para os Tutores', 
            'description' => 'Permite gerencia as informações dos cursistas.'
        ]);
        
        $tutor->givePermissionTo(['tutor_evaluate',]);
    }
}
