<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::dropIfExists('quiz_questions');
        
       Schema::create('quiz_questions', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('quiz_id');
          $table->integer('sortorder');
          $table->integer('questiontype');
          
          $table->integer('questioncount')->default(1);
          $table->json('question');
          $table->json('answers');

          $table->softDeletes();
          $table->timestampsTz();
       
       
          $table->index(['quiz_id'], 'quiz_questions_quiz_id_index');
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('quiz_questions');
    }
}
