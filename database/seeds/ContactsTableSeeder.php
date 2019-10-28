<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('contacts')->insert([
          'id' => 1,
          'info' => json_encode([
            "email"=>"abdullahalnahhal@gmail.com",
            "mobile"=>"01116505468",
            "facebook"=>"https://www.facebook.com/profile.php?id=100009659252964",
            "twitter"=>"https://twitter.com/AbdullahAlnahh1",
            "instagram"=>"https://www.instagram.com/alnahhalabdullah/",
            "lat"=>"30.5743054",
            "lon"=>"31.5027398",
            "address"=>"Zagazig",
          ]),
      ]);
    }
}
