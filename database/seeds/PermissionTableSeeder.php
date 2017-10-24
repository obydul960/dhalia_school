<?php

use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission =[
            [
                'name'=>'role-red',
                'display_name'=>'Display Role Listing',
                'description'=>'See Only Listing on Role',
            ]
        ];
    }
}
