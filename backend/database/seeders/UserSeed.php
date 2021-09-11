<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        $users = array(
            array(
                'name' => 'test-1',
                'email' => 'test1@test.com',
                'password' => Hash::make(Str::random(10)),
                'created_at' => now()
            ),
            array(
                'name' => 'test-2',
                'email' => 'test2@test.com',
                'password' => Hash::make(Str::random(10)),
                'created_at' => now()
            ),
            array(
                'name' => 'test-3',
                'email' => 'test3@test.com',
                'password' => Hash::make(Str::random(10)),
                'created_at' => now()
            )
        );

        User::insert($users);
    }
}
