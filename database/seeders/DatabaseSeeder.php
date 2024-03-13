<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Role;
use App\Models\User;
use App\Models\Feature;
use App\Models\Permission;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $roles = ['admin', 'user'];
        foreach ($roles as $role) Role::create(['name' => $role]);

        $features = [
            'user' => ['view', 'create', 'edit', 'delete'],
            'role' => ['view', 'create', 'edit', 'delete']
        ];
        foreach ($features as $feature => $permissions) {
            $feature = Feature::create(['name' => $feature]);

            foreach ($permissions as $permission) {
                Permission::create([
                    'name' => $permission,
                    'feature_id' => $feature->id
                ]);
            }
        }

        $admin = Role::where('name', 'admin')->first();
        $permissions = Permission::all();
        foreach ($permissions as $permission) $admin->permissions()->attach($permission);

        User::factory()->create([
            'name' => 'admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => 'admin123',
            'role_id' => Role::ADMIN,
        ]);

        User::factory(50)->create();
    }
}
