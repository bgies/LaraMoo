<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseSectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('course_sections');
       
        Schema::create('course_sections', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id');
            $table->integer('courseorder');
            $table->string('sectionname', 64);
            $table->string('sectionshortdescription', 255);
            $table->mediumText('sectiondescription');
            
            $table->tinyInteger('visible')->default(0);
            
            $table->timestampsTz();
            
            $table->index(['course_id', 'courseorder', 'sectionname'], 'course_sections_course_sectionname_index');
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::dropIfExists('course_sections');
       
    }
}
