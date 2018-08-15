<?php

//use Bouncer;
use Illuminate\Database\Seeder;

// TO RUN
// php artisan db:seed --class=BouncerSeeder

class BouncerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       \DB::table('assigned_roles')->truncate();
       \DB::table('abilities')->truncate();
       
       
       // WEB STAFF
       Bouncer::allow('web-superadmin')->everything();       
       Bouncer::allow('web-admin')->everything();
       Bouncer::allow('web-staff')->to('view-admin-dashboard');
       Bouncer::allow('web-moderator')->to('view-admin-dashboard');
       Bouncer::allow('web-moderator')->to('moderate');
       Bouncer::allow('web-member-manager')->to('edit-members');
       Bouncer::allow('web-payments-manager')->to('edit-member-subscription');
       Bouncer::allow('web-payments-manager')->to('view-payments');

       // SCHOOLS
       Bouncer::allow('school-superadmin')->to('school:manage');
       Bouncer::allow('school-admin')->to('school:manage');
       Bouncer::allow('school-teacher')->to('school:teacher');
       
       // USERS
       Bouncer::allow('member')->to('profile:edit:own');
       Bouncer::allow('verified-user')->to('edit-profile');
       
    }
}
