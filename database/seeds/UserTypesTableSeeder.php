<?php

use Illuminate\Database\Seeder;

class UserTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('user_types')->truncate();
       
       \DB::table('user_types')->insert([
          [
             'id' => 1,
             'user_type_group' => 1,
             'user_type_language' => 'en',
             'user_type' => 'Web Staff',
          ],
          [
             'id' => 2,
             'user_type_group' => 2,
             'user_type_language' => 'en',
             'user_type' => 'School Staff',
          ],
          [
             'id' => 3,
             'user_type_group' => 3,
             'user_type_language' => 'en',
             'user_type' => 'Member',
          ]
       ]);

    }
}
