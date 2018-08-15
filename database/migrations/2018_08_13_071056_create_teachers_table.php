<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeachersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('school_id', false, true);
            
            $table->string('phone', 15)->unique();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            
            $table->string('teacher_language', 5)->default('en');
            $table->integer('teacher_type', false, true)->default(101);
            $table->mediumText('description')->nullable();
            
            $table->string('salutation', 10)->nullable();
            $table->string('surname')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            
            $table->string('gender', 1)->nullable();
            
            $table->date('birthdate')->nullable();
            $table->dateTimeTz('last_login')->nullable();
            $table->dateTimeTz('last_location_time')->nullable();
            $table->decimal('last_location_lat',9,4)->nullable();
            $table->decimal('last_location_lon',9,4)->nullable();
            $table->string('last_ip_address', 45)->nullable();

            $table->smallInteger('is_activated')->default(0);
            
            $table->string('avatar_name', 45)->default('');
            
            $table->string('country', 3)->nullable();
            $table->string('province', 5)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('address', 100)->nullable();
           
            $table->decimal('account_balance', 13, 4)->default(0.0);
            $table->tinyInteger('account_type', false, true)->default(1);
            $table->integer('teacher_level', false, true)->default(0);
            $table->json('teacher_options')->nullable();
            $table->json('school_options')->nullable();
            
            $table->string('stripe_id')->nullable();
            $table->string('card_brand')->nullable();
            $table->string('card_last_four')->nullable();
            $table->timestamp('trial_ends_at')->nullable();
            
            $table->softDeletes();
            $table->timestamps();
            $table->rememberToken();
            
            $table->index(['phone'], 'teachers_phone_index');
            $table->index(['username', 'id'], 'teachers_username_index');
            $table->index(['teacher_language', 'id'], 'teachers_language_index');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('teachers');
    }
}
