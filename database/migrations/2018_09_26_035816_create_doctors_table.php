<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('lastname',50);
            $table->string('mail',50)->unique();
            $table->string('password');
            $table->unsignedInteger('gender_id');
            $table->unsignedInteger('document_id');
            $table->timestamps();

        // $table->foreign('gender_id')
        //               ->references('id')->on('genders')
        //               ->onDelete('cascade');

        // $table->foreign('document_id')
        //               ->references('id')->on('documents')
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
        Schema::dropIfExists('doctors');
    }
}
