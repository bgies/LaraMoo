<?php

use Illuminate\Database\Seeder;
use App\Models\User\User;
//use App\Services\UserService;


class LaraMooTestDataTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // This should be run last... don't truncate any table unless necessary
        // ONLY PUT TEST DATA THAT SHOULD NOT BE IN THE PACKAGE HERE.
//       \DB::table('course_categorys')->truncate();
        
       // The Admin user should already be there when this in run
       $userOptions = [
          "contact_me" => 2,
          "auto_subscribe" => 1
       ];
       
       \DB::table('users')->where('id', '>', 1)->delete();
       
       
       
       if (!User::where('username', 'teacher1')->first()) {
          $user = User::create([
             'id' => 2,
             'username' => 'teacher1-admin',
             'phone' => '+8613880474469',
             'email' => 'teacher1@admin.com',
             'password' => bcrypt('teacher1'),
             'user_type' => 2,
             'user_options' => json_encode($userOptions),
             'user_abilities' => '["school:manage"]'
          ]);
       
//          $service->create($user, 'teacher', 'teacher', false);
       }
       
       if (!User::where('username', 'teacher2')->first()) {
          $user = User::create([
             'id' => 3,
             'username' => 'teacher2-school-teacher',
             'phone' => '+8613880474470',
             'email' => 'teacher2@admin.com',
             'password' => bcrypt('teacher2'),
             'user_type' => 2,
             'user_options' => json_encode($userOptions),
             'user_abilities' => '["school:teacher"]'
          ]);
       
//          $service->create($user, 'teacher', 'teacher', false);
       }
        
       if (!User::where('username', 'student1')->first()) {
          $user = User::create([
             'id' => 4,
             'username' => 'student1',
             'email' => 'student1@admin.com',
             'phone' => '+8613880474471',
             'password' => bcrypt('student1'),
             'user_type' => 3,
             'user_options' => json_encode($userOptions),
             'user_abilities' => '["profile:edit:own"]'
          ]);
           
//          $service->create($user, 'member', 'member', false);
       }
        
       if (!User::where('username', 'student2')->first()) {
          $user = User::create([
             'id' => 5,
             'username' => 'student2',
             'phone' => '+8613880474472',
             'email' => 'student2@admin.com',
             'password' => bcrypt('student2'),
             'user_type' => 3,
             'user_options' => json_encode($userOptions),
             'user_abilities' => '["profile:edit:own"]'
          ]);
           
//          $service->create($user, 'member', 'member', false);
       }
        
        
       
       
    }
}
