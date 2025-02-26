<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // إنشاء الأدوار
        $superAdminRole = Role::firstOrCreate(['name' => 'admin']);
        $doctorRole = Role::firstOrCreate(['name' => 'doctor']);
        $userRole = Role::firstOrCreate(['name' => 'user']);


        $permissions = [
            'manage_users',
            'view_reports',
            'create_appointments',
            'manage_patients',
            'access_dashboard'
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate(['name' => $permission]);
        }


        $superAdminRole->givePermissionTo(Permission::all());


        $doctorRole->givePermissionTo(['view_reports', 'create_appointments', 'manage_patients']);


        $userRole->givePermissionTo(['create_appointments']);


        $superAdmin = User::firstOrCreate([
            'name' => 'Super Admin',
            'email' => 'superadmin@example.com',
            'password' => bcrypt('password123')
        ]);
        $superAdmin->assignRole($superAdminRole);

        $doctor = User::firstOrCreate([
            'name' => 'Doctor User',
            'email' => 'doctor@example.com',
            'password' => bcrypt('password123')
        ]);
        $doctor->assignRole($doctorRole);

        $normalUser = User::firstOrCreate([
            'name' => 'Normal User',
            'email' => 'user@example.com',
            'password' => bcrypt('password123')
        ]);
        $normalUser->assignRole($userRole);
    }
}
