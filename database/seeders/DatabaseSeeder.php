<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\Status;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // seeding to role table
        Role::create([
            'name' => 'User'
        ]);
        Role::create([
            'name' => 'Designer'
        ]);
        Role::create([
            'name' => 'Gardener'
        ]);

        // seeding to statuses table
        Status::create([
            'name' => 'Completed'
        ]);
        Status::create([
            'name' => 'On-Progress'
        ]);

        // seeding to user table
        User::create([
            'name' => 'Yudha Designer',
            'email' => 'yudha@designer.com',
            'password' => bcrypt('12345678'),
            'role_id' => Role::where('name', 'designer')->first()->id
        ]);
        User::create([
            'name' => 'Yudha Gardener',
            'email' => 'yudha@gardener.com',
            'password' => bcrypt('12345678'),
            'role_id' => Role::where('name', 'gardener')->first()->id
        ]);
        User::create([
            'name' => 'Yudha User',
            'email' => 'yudha@user.com',
            'password' => bcrypt('12345678'),
            'role_id' => Role::where('name', 'user')->first()->id
        ]);
    }
}
