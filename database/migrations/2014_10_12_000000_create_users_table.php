<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->dateTime('last_login')->useCurrent();
            $table->tinyInteger('is_superuser')->default('0');
            $table->string('first_name', 150)->nullable();
            $table->string('last_name', 150)->nullable();
            $table->tinyInteger('is_staff')->nullable();
            $table->tinyInteger('is_active')->nullable();
            $table->dateTime('date_joined')->nullable();
            $table->string('bio', 250)->nullable();
            $table->string('avatar', 250)->nullable();
            $table->string('skype_id', 250)->nullable();
            $table->string('telegram_id', 250)->nullable();
            $table->string('company', 250)->nullable();
            $table->string('phone', 250)->nullable();
            $table->string('api_key', 250)->nullable();
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
        Schema::dropIfExists('users');
    }
}
