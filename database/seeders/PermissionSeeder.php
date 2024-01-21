<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Custom permission for horizon dashboard
        Permission::create([
            'name' => 'access_horizon_dashboard',
            'guard_name' => 'web',
        ]);
    }
}
