<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            [
                'id' => 1,
                'name' => Role::ROLES['Admin'],
            ],
            [
                'id' => 2,
                'name' => Role::ROLES['Agent'],
            ],
        ];

        Role::insert($roles);
    }
}
