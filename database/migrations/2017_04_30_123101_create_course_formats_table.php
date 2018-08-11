<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseFormatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       
       Schema::dropIfExists('course_formats');
       
       Schema::create('course_formats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('format', 25);
            $table->string('description', 255);
            
            $table->index(['format', 'id'], 'course_formats_format_index');
            
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_formats');
    }
}
