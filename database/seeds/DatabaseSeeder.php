<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       // Lookup Groups First
       $this->call(UserTypeGroupsTableSeeder::class);
       
       // Then Lookup tables
       $this->call(CourseFormatsTableSeeder::class);
       
       $this->call(QuestionTypesTableSeeder::class);
       $this->call(UserTypesTableSeeder::class);
       
       
       
       // Then individual Tables
       $this->call(UserTableSeeder::class);
       
       $this->call(BouncerSeeder::class);
       // NOW data specific to this Website
       // NOTE - This should not be included in open source
       
       
       $this->call(LaraMooTestDataTableSeeder::class);
       
       
       
    }
}
