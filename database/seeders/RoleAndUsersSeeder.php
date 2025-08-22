<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleAndUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      //role
      $super = Role::firstOrCreate(['name' => 'super_admin']);
      $owner = Role::firstOrCreate(['name' => 'owner']);
      $customeer = Role::firstOrCreate(['name' => 'customer']);

      // super admin
      $admin = User::firstOrCreate(['email' => 'superadmin@gmail.com'
    ]);
    }
}
