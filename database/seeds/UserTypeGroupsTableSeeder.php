<?php

use Illuminate\Database\Seeder;

class UserTypeGroupsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('user_type_groups')->truncate();
       
       \DB::table('user_type_groups')->insert([
          [
             'id' => 1,
             'user_type_group_language' => 'en',
             'user_type_group' => 'Web Staff',
          ],
          [
             'id' => 2,
             'user_type_group_language' => 'en',
             'user_type_group' => 'School Staff',
          ],
          [
             'id' => 3,
             'user_type_group_language' => 'en',
             'user_type_group' => 'Member',
          ]
       ]);
    }
}
