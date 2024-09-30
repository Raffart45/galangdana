<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ownerRole = Role::create([
            'name' => 'owner'
        ]);

        $fundraiserRole = Role::create([
            'name' => 'fundraiser'
        ]);

        $userOwner = User::create([
           'name' => 'Clara Septiana',
           'avatar' => 'images/default-avatar.png',
           'email' => 'clara@owner.com',
           'password' => bcrypt('12345678')
        ]);

        $userOwner->assignRole($ownerRole);
    }
}
