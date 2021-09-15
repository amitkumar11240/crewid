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
            $table->string('fname');
            $table->string('mname')->nullable();
            $table->string('lname')->nullable();
            $table->string('pkg_num');
            $table->timestamp('pkg_date')->nullable();
            $table->string('avatar')->nullable();
            $table->MEDIUMTEXT('signature')->nullable();
            $table->string('provider_id')->nullable();
        
            $table->string('email')->nullable()->unique();
            $table->timestamp('email_verified_at')->nullable()->change();
            $table->string('password')->nullable();
            $table->string('role')->nullable();
            $table->string('Preffered_Name')->nullable();
            $table->string('Phone_Number')->nullable()->unique();
            $table->string('Second_Phone_Number')->nullable()->unique();
            $table->string('DOB')->nullable();
            $table->string('Social_Security_Number')->nullable();
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
        Schema::dropIfExists('users');
    }
}
