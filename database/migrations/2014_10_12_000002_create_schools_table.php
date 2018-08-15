

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
            $table->string('school_language', 5)->default('en');
            $table->string('school_name', 64)->nullable();
            
            $table->string('school_slogan', 255)->nullable();
            $table->string('logo', 64)->nullable();
            $table->string('school_description', 255)->nullable();
            
            $table->integer('school_type', false, true);
            $table->integer('business_type', false, true)->nullable();
            $table->string('contact_name', 64)->nullable();
            $table->string('address1', 64);
            $table->string('address2', 64)->nullable();
            $table->string('city', 64)->nullable();
            $table->integer('city_id')->nullable();
            $table->string('state', 32);
            $table->integer('state_id')->nullable();
            $table->string('country_code', 3);
            $table->string('zip', 25)->nullable();
            $table->string('full_address', 255)->nullable();
            $table->string('timezone', 64)->nullable();
            
            $table->string('phone', 15)->unique();
            $table->string('public_phone', 15)->unique();
            $table->string('public_fax', 15)->unique();

            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');

            $table->integer('super_user', false, true);
            $table->date('founding_date')->nullable();
            $table->string('website', 64)->nullable();
            $table->string('wechat_id', 64)->nullable()->default(null);
            $table->string('qq_id', 64)->nullable()->default(null);

            $table->json('school_info')->nullable();
            $table->json('setup_options')->nullable();
            $table->json('payment_methods')->nullable();
            
            
            $table->integer('teacher_count', false, true)->default(0);
            $table->integer('class_count', false, true)->default(0);
            $table->integer('student_count', false, true)->default(0);
            $table->string('image_dir', 15)->nullable();
            $table->string('image_numeric_dir', 15)->nullable();
            
            $table->smallInteger('is_activated')->default(0);
            
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
