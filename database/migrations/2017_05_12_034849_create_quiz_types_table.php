<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::dropIfExists('quiz_types');
        
       Schema::create('quiz_types', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('quiztype');
           
          $table->index(['quiztype', 'id'], 'quiz_types_questiontype_index');
           
       });
           
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('quiz_types');
    }
}
