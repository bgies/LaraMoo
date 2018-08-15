<?php

use Illuminate\Database\Seeder;

class QuestionTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
       \DB::table('question_types')->truncate();
        
       \DB::table('question_types')->insert([
          [
            'id' => 1,
            'question_type_language' => 'en',
            'question_type' => 'Multiple Choice'
         ],
         [
          'id' => 2,
          'question_type_language' => 'en',
          'question_type' => 'True False'
         ],
          [
            'id' => 3,
             'question_type_language' => 'en',
            'question_type' => 'Numeric'
             ],
          [
            'id' => 4,
             'question_type_language' => 'en',
            'question_type' => 'Calculated'
          ],
         [
          'id' => 5,
            'question_type_language' => 'en',
          'question_type' => 'Short Answer'
         ],
          [
          'id' => 6,
             'question_type_language' => 'en',
          'question_type' => 'Essay'
           ]
          
          
       ]);
       
    }
}
