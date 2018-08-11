

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('schools');
       
        Schema::create('schools', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone', 15)->unique();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');

            $table->string('app_language', 5)->default('en');
            $table->integer('superadmin', false, true);
            
            $table->string('school_name');
            $table->string('school_slogan')->nullable();
            $table->text('description')->nullable();
            $table->string('public_phone', 15)->unique();
            $table->string('public_fax', 15)->unique();
            
            $table->date('founding_date')->nullable();

            $table->smallInteger('is_activated')->default(0);
            
            $table->string('logo', 45)->default('');
            
            $table->string('country', 3)->nullable();
            $table->string('province', 5)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('address', 100)->nullable();
            
            $table->json('school_options')->nullable();
            
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('schools');
    }
}
