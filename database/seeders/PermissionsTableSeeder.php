<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'name' => 'permission_create',
            ],
            [
                'name' => 'permission_edit',
            ],
            [
                'name' => 'permission_delete',
            ],
            [
                'name' => 'permission_show',
            ],
            [
                'name' => 'permission_access',
            ],
            [
                'name' => 'role_create',
            ],
            [
                'name' => 'role_edit',
            ],
            [
                'name' => 'role_show',
            ],
            [
                'name' => 'role_delete',
            ],
            [
                'name' => 'role_access',
            ],
            [
                'name' => 'category_create',
            ],
            [
                'name' => 'category_edit',
            ],
            [
                'name' => 'category_show',
            ],
            [
                'name' => 'category_delete',
            ],
            [
                'name' => 'category_access',
            ],
            [
                'name' => 'label_create',
            ],
            [
                'name' => 'label_edit',
            ],
            [
                'name' => 'label_show',
            ],
            [
                'name' => 'label_delete',
            ],
            [
                'name' => 'label_access',
            ],
            [
                'name' => 'ticket_create',
            ],
            [
                'name' => 'ticket_edit',
            ],
            [
                'name' => 'ticket_show',
            ],
            [
                'name' => 'ticket_delete',
            ],
            [
                'name' => 'ticket_access',
            ],
            [
                'name' => 'user_create',
            ],
            [
                'name' => 'user_edit',
            ],
            [
                'name' => 'user_show',
            ],
            [
                'name' => 'user_delete',
            ],
            [
                'name' => 'user_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
