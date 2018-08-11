<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::dropIfExists('course_contents');
        
       Schema::create('course_contents', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('course_id');
          $table->integer('section_id');
          $table->integer('sortorder');
          $table->text('content');
          
          $table->softDeletes();
          $table->timestampsTz();
       
          $table->index(['course_id', 'section_id', 'sortorder'], 'course_contents_course_section_index');
       
       });
           
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('course_contents');
    }
}
