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
            $table->string('category_name', 255);
            $table->mediumText('description');
            $table->integer('category_parent')->default(0);
            $table->integer('sort_order');
            $table->integer('course_count')->default(0);
            $table->tinyInteger('visible')->default(1);
            
            $table->softDeletes();
            
            $table->index(['category_name', 'category_parent', 'sort_order'], 'course_categorys_categoryname_index');
            
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
