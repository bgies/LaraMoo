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
          $table->integer('quizcategory')->nullable();
          $table->string('quizname', 255);
          $table->string('quizdescription', 255)->default('');
          $table->string('quiznotes', 255)->default('');
          
          $table->integer('quiztype');
          $table->tinyInteger('answersvisibility');
          $table->tinyInteger('allowstudentretake');
          $table->tinyInteger('gradingvisibility');
          
          $table->string('lang', 10);
          $table->tinyInteger('is_survey')->default(0);
          
          
          $table->softDeletes();
          $table->timestampsTz();
          
          
          $table->index(['quiztype', 'quizname', 'id'], 'quizs_quiztype_index');
          $table->index(['lang', 'quizname', 'id'], 'quizs_lang_quizname_index');
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
