<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourseCategorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('course_categorys');
       
        Schema::create('course_categorys', function (Blueprint $table) {
            $table->increments('id');
            $table->string('categoryname', 255);
            $table->mediumText('description');
            $table->integer('categoryparent');
            $table->integer('sortorder');
            $table->integer('coursecount')->default(0);
            $table->tinyInteger('visible')->default(0);
            
            $table->timestampsTz();
            
            $table->index(['categoryname', 'categoryparent', 'sortorder'], 'course_categorys_categoryname_index');
            
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('course_categorys');
    }
}
