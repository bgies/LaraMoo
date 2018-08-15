<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('users');
       
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone', 15)->unique();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');

            $table->string('user_language', 5)->default('en');
            $table->integer('user_type', false, true)->default(101);
            
            $table->string('salutation', 10)->nullable();
            $table->string('surname')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            
            $table->string('gender', 1)->nullable();
            
            $table->date('birthdate')->nullable();
            $table->dateTimeTz('last_login')->nullable();
            $table->dateTimeTz('last_location_time')->nullable();
            $table->decimal('last_location_lat', 9, 4)->nullable();
            $table->decimal('last_location_lon', 9, 4)->nullable();
            
            $table->smallInteger('is_activated')->default(0);
            
            $table->string('avatar_name', 45)->default('');
            
            $table->string('country', 3)->nullable();
            $table->string('province', 5)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('address', 100)->nullable();
            
            $table->string('last_ip_address', 45)->nullable();
            
            $table->decimal('account_balance', 13, 4)->default(0.0);
            $table->tinyInteger('account_type', false, true)->default(1);
            $table->integer('user_level', false, true)->default(0);
            $table->json('user_options')->nullable();
            
            $table->string('stripe_id')->nullable();
            $table->string('card_brand')->nullable();
            $table->string('card_last_four')->nullable();
            $table->timestamp('trial_ends_at')->nullable();

            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
            
            $table->index(['phone'], 'users_phone_index');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
