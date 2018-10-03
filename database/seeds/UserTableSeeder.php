<?php

use App\Models\User\User;
use App\Services\UserService;
use Illuminate\Database\Seeder;
use Silber\Bouncer\Bouncer;
use function GuzzleHttp\json_encode;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
       \DB::table('users')->delete();
       
//        $service = app(UserService::class);

       
       //$bouncer = Bouncer::create();
       //$bouncer->useUserModel(User::class);
       //$abilities = $bouncer->
       $userOptions = [
          "contact_me" => 2,
          "auto_subscribe" => 1
       ];
       
        \DB::table('users')->insert([
           [
              'id' => 1,
              'username' => 'Admin',
              'phone' => '+8613880474468',
              'email' => 'admin@admin.com',
              'password' => bcrypt('ginseng'),
              'user_type' => 1,
              'user_options' => json_encode($userOptions),
              'user_abilities' => '["*"]'
           ]
         ]);
        
        //$user = User::where('id', '=', 1)->get();

        //\Bouncer::assign('web-superadmin')->to($user);
        
        //$bouncer->allow($user)->to('web-superadmin');
        //$bouncer->assign('web-superadmin');
        //Bouncer::assign('web-superadmin')->to($user);
        //$user->allow('web-superadmin');
        
        
/*        
        if (!User::where('username', 'admin')->first()) {
            $user = User::create([
                'username' => 'Admin',
                'phone' => '+8613880474468',
                'email' => 'admin@admin.com',
                'password' => bcrypt('admin'),
            ]);
            
            $service->create($user, 'admin', 'admin', false);
        }
*/
    }
}
