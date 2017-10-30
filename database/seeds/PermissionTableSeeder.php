<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            [
                'name' => 'role-list',
                'display_name' => 'Display Role Listing',
                'description' => 'See only Listing Of Role'
            ],
            [
                'name' => 'role-create',
                'display_name' => 'Create Role',
                'description' => 'Create New Role'
            ],
            [
                'name' => 'role-edit',
                'display_name' => 'Edit Role',
                'description' => 'Edit Role'
            ],
            [
                'name' => 'role-delete',
                'display_name' => 'Delete Role',
                'description' => 'Delete Role'
            ],
            [
                'name' => 'data-list',
                'display_name' => 'Display Data Listing',
                'description' => 'See only Listing Of Data'
            ],
            [
                'name' => 'data-create',
                'display_name' => 'Create Data',
                'description' => 'Create New Data'
            ],
            [
                'name' => 'data-edit',
                'display_name' => 'Edit Data',
                'description' => 'Edit Data'
            ],
            [
                'name' => 'data-delete',
                'display_name' => 'Delete Data',
                'description' => 'Delete Data'
            ]
        ];

        foreach ($permission as $key => $value) {
            Permission::create($value);
        }
    }
}
