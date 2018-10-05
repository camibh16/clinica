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

        Schema::create('roles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('genders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('occupations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('type_documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('type');
            $table->text('description')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',50);
            $table->string('lastname',50);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password',100);
            $table->bigInteger('cellphone');

            $table->unsignedInteger('occupation_id');
                $table->foreign('occupation_id')
                    ->references('id')
                    ->on('occupations');

            $table->unsignedInteger('role_id')->default(\App\Role::PATIENT);
                $table->foreign('role_id')
                    ->references('id')
                    ->on('roles');

            $table->unsignedInteger('gender_id');
                $table->foreign('gender_id')
                    ->references('id')
                    ->on('genders');

            $table->unsignedInteger('type_document_id');
                $table->foreign('type_document_id')
                    ->references('id')
                    ->on('type_documents');

            $table->integer('document_number')->unique();
            $table->softDeletes();
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
        Schema::dropIfExists('roles');
        Schema::dropIfExists('genders');
        Schema::dropIfExists('type_documents');
        Schema::dropIfExists('occupations');
    }
}
