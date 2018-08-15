<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::dropIfExists('quizs');
       
       Schema::create('quizs', function (Blueprint $table) {
          $table->increments('id');
          $table->string('quiz_language', 5)->default('en');
          $table->integer('quiz_category')->nullable();
          $table->string('quiz_name', 255);
          $table->string('quiz_description', 255)->default('');
          $table->string('quiz_notes', 255)->default('');
          
          $table->integer('quiz_type');
          $table->tinyInteger('answers_visibility');
          $table->tinyInteger('allow_student_retake');
          $table->tinyInteger('grading_visibility');
          
          $table->tinyInteger('is_survey')->default(0);          
          
          $table->softDeletes();
          $table->timestampsTz();
          
          
          $table->index(['quiz_type', 'quiz_name', 'id'], 'quizs_quiztype_index');
          $table->index(['quiz_language', 'quiz_name', 'id'], 'quizs_lang_quizname_index');
       });
       }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('quizs');
    }
}
