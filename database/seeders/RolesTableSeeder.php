<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Role::firstOrCreate(['name' => 'Admin']);
        Role::firstOrCreate(['name' => 'Predial']);
        Role::firstOrCreate(['name' => 'Catastro']);
        Role::firstOrCreate(['name' => 'Cajas']);
        Role::firstOrCreate(['name' => 'Cartografos']);
        Role::firstOrCreate(['name' => 'Ciudadanos']);
    }
}
