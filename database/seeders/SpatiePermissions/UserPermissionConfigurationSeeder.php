<?php

namespace Database\Seeders\SpatiePermissions;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserPermissionConfigurationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void 
    {
        // Configurações
        Permission::create(['name' => 'configuration_users', 'display_name' => 'Configurações Usuários']);
        Permission::create(['name' => 'configuration_exercises', 'display_name' => 'Configurações de Atividades']);
        Permission::create(['name' => 'configuration_reflections', 'display_name' => 'Configurações de Reflexões']);
        Permission::create(['name' => 'configuration_professions', 'display_name' => 'Configurações das Profissões']);
        Permission::create(['name' => 'configuration_evaluations', 'display_name' => 'Configurações de Avaliações']);
        Permission::create(['name' => 'configuration_presential_activity', 'display_name' => 'Configurações das Encontros Presenciais']);

        // Criando roles com nomes consistentes
        $configurations = Role::create([
            'name' => 'configurations',
            'display_name' => 'Configurações de Sistema', 
            'description' => 'Permite modificar parâmetros críticos e ajustes que afetam o funcionamento global do sistema.'
        ]);
        
        $configurations->givePermissionTo(['configuration_users', 'configuration_exercises', 'configuration_reflections', 'configuration_professions', 'configuration_evaluations', 'configuration_presential_activity']);
    }
}
