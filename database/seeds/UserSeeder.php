<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Insert some stuff
        DB::table('users')->insert(
            array(
                'id' => 1,
                'firstname' => 'Suraj',
                'lastname' => 'Tiwari',
                'username' => 'Suraj Tiwari',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin@123'),
                'avatar' => 'no_avatar.png',
                'phone' => '0123456789',
                'role_id' => 1,
                'statut' => 1,
            )
        );
    }
}
