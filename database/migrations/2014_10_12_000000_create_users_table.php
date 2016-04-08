<?php

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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('primary_phone');
            $table->string('secondary_phone');
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->string('user_type');
            $table->string('street_address');
            $table->string('city');
            $table->string('state');
            $table->date('birthday');
            $table->string('social_security');
            $table->string('affiliate_id');
            $table->string('zip');
            $table->string('fax');
            $table->string('company');
            $table->string('website_url');
            $table->string('referred_by');
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
        Schema::drop('users');
    }
}
