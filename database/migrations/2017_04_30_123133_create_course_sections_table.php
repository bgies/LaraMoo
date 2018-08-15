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
            $table->integer('course_order');
            $table->string('section_name', 64);
            $table->string('section_short_description', 255);
            $table->mediumText('section_description');
            $table->integer('contents_count', false, true)->default(0);
            
            $table->json('section_options')->nullable();
            $table->tinyInteger('visible')->default(0);
            
            $table->softDeletes();
            $table->timestampsTz();
            
            $table->index(['course_id', 'course_order', 'section_name'], 'course_sections_course_sectionname_index');
            
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
