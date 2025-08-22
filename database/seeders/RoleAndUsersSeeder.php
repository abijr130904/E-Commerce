<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

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
      $customer = Role::firstOrCreate(['name' => 'customer']);

      // super admin
      $admin = User::firstOrCreate(
        ['email' => 'super_admin@admin.com'],
        ['name' => 'administrator','password' => Hash::make('password')]
      );
      $admin->assignRole($super);

      //owner
      $merchant = User::firstOrCreate(
        ['email' => 'owner@admin.com'],
        ['name' => 'owner','password' => Hash::make('password')]
      );
      $merchant->assignRole($owner);

      //owner
      $cust = User::firstOrCreate(
        ['email' => 'customer@admin.com'],
        ['name' => 'Guest','password' => Hash::make('password')]
      );
      $cust->assignRole($customer);

    }
}
