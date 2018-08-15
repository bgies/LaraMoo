<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizGradingVisiblesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::dropIfExists('quiz_grading_visibles');
       
       Schema::create('quiz_grading_visibles', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('grading_visibility');
          $table->string('description');
          
          $table->index(['grading_visibility', 'id'], 'quiz_grading_visibles_visible_index');
           
       });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('quiz_grading_visibles');
    }
}
