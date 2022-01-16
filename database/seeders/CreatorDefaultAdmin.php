<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreatorDefaultAdmin extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create(['name' => 'Admin', 'email' => 'qwe@gmail.ru', 'password' => bcrypt(123), 'role_id' =>1]);
        
        \App\Models\User::create(['name' => 'Anon', 'email' => 'Anon@gmail.ru', 'password' => bcrypt(123), 'role_id' =>2]);
    }
}
