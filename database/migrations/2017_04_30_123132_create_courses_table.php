<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::dropIfExists('courses');
       
       Schema::create('courses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('course_language', 5);
            $table->integer('category')->default(0);
            $table->integer('sort_order')->default(0);
            $table->string('full_name', 255);
            $table->string('short_name', 255);
            $table->string('idnumber', 100)->default('');
            $table->integer('freesections')->default(0);
            $table->mediumText('summary');
            $table->integer('course_format_id')->default(1);
            $table->tinyInteger('showgrades')->default(1);
            $table->tinyInteger('newsitems')->default(1);
            $table->date('startdate')->nullable()->default(null);
            $table->date('enddate')->nullable()->default(null);
            $table->string('icon', 255)->default('');
            $table->tinyInteger('showreports')->default(0);
            $table->tinyInteger('visible')->default(0);
            $table->integer('theme')->default(0);
            $table->json('course_options')->nullable();
            
            $table->softDeletes();
            $table->timestampsTz();
            
            $table->index(['course_language', 'full_name', 'visible'], 'courses_fullname_visible_index');
            $table->index(['course_language', 'category', 'full_name'], 'courses_category_fullname_index');
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses');
    }
}
