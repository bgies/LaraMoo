<?php

use Illuminate\Database\Seeder;

class CourseFormatsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       \DB::table('course_formats')->truncate();
        
       \DB::table('course_formats')->insert([
          [
            'id' => 1,
            'format' => 'weekly',
            'description' => 'The course is organized week by week, with a clear start date and a finish date.'
         ],
         [
            'id' => 2,
            'format' => 'topics',
            'description' => 'The course is organised into topic sections that a teacher can give titles to'
         ],
          [
             'id' => 3,
             'format' => 'incrementaltopics',
             'description' => 'The course is organised into topic sections that a teacher can give titles to. Sections must be completed before moving on to other sections'
          ],
         [
            'id' => 4,
            'format' => 'section',
            'description' => 'Course is displayed section by section'
         ],
         [
            'id' => 5,
            'format' => 'social',
            'description' => ''
         ]
          
          
          
          
       ]);
       
    }
}
