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
            'permissions' => json_encode(["access-users","access-admins","create-admins","update-admins","delete-admins","access-guests","access-admins-permission","create-admins-permission","update-admins-permission","delete-admins-permission","access-slider","create-slider","update-slider","delete-slider","access-about","create-about","update-about","delete-about","access-fields","create-fields","update-fields","delete-fields","access-achievements","create-achievements","update-achievements","delete-achievements","access-clients","create-clients","update-clients","delete-clients","access-gallery","create-gallery","update-gallery","delete-gallery","access-videos","create-videos","update-videos","delete-videos","access-contacts","create-contacts","update-contacts","delete-contacts","access-blog","create-blog","update-blog","delete-blog"]),
        ]);

    }
}
