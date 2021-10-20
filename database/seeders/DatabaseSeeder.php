<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'userid' => (string) Str::uuid(),
            'username' => 'admin',
            'firstname' => 'Admin',
            'lastname' => 'User',
            'email' => 'admin@challengeforearth.com',
            'password' => Hash::make('azerty'),
            'email_verified_at' => '2021-04-27 16:19:17',
        ]);

        $profile = Profile::create([
            'profileid' => (string) Str::uuid(),
            'userid' => $user->userid,
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
