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
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('lastname',50);
            $table->string('email',50)->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',100);
            $table->bigInteger('cellphone');
            $table->unsignedInteger('occupation_id');
            $table->unsignedInteger('gender_id');
            $table->unsignedInteger('document_id');
            $table->integer('document_number')->unique();
            $table->rememberToken();
            $table->timestamps();

        // $table->foreign('occupation_id')
        //               ->references('id')->on('occupations')
        //               ->onDelete('cascade');
        // $table->foreign('gender_id')
        //               ->references('id')->on('genders')
        //               ->onDelete('cascade');
        // $table->foreign('document_id')
        //               ->references('id')->on('documents')
        //               ->onDelete('cascade');
        // $table->foreign('doctor_id')
        //               ->references('id')->on('doctors')
        //               ->onDelete('cascade');
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
