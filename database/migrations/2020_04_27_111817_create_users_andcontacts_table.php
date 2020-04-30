<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersAndcontactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_contacts', function (Blueprint $table) {
            // $table->id();
            $table->unsignedBigInteger('ownerUser_id');
            $table->foreign('ownerUser_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('contactUser_id');
            
            $table->foreign('contactUser_id')->references('id')->on('users');
            $table->timestamps();

            $table->primary(['contactUser_id', 'ownerUser_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_andcontacts');
    }
}
