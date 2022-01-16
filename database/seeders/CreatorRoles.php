<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CreatorRoles extends Seeder
{
    public function run()
    {
        \App\Models\Roles::create(['role' => 'administrator']);

        \App\Models\Roles::create(['role' => 'user']);
    }
}
