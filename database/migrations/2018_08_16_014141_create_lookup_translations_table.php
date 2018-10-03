<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLookupTranslationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lookup_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('table_name');
            $table->integer('table_id', false, true);
            $table->string('table_language', 5);
            $table->string('table_field');
            $table->mediumText('table_translation');
            
            $table->string('translator');
            $table->tinyInteger('translation_approved', false, true);
            
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lookup_translations');
    }
}
