<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'username' => 'Weeee',
            'email' => Str::random(10).'@gmail.com',
            'password' => Hash::make('password'),
            'first_name' => 'Huy',
            'last_name' => 'Pham',
            'is_active' => true,
            'is_admin' => true,
        ]);

        User::factory()->count(10)->create();
    }
}
