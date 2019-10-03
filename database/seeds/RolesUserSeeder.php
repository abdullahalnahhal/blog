<?php

use Illuminate\Database\Seeder;

class RolesUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('role_users')->insert([
          [
            'id'=>1,
            'user_id'=>1,
            'roles_id' => 1,
          ],
        ]);
    }
}
