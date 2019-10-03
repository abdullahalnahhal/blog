<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'name' => 'Admin',
            'slug' => 'admin',
            'permissions' => json_encode([
              "access-users",
              "create-admins",
              "create-guests",
              "create-admins-permission
            "]),
        ]);

    }
}
