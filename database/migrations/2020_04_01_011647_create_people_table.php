<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->nullable();
            $table->string('full_name')->nullable();
            $table->string('apaterno')->nullable();
            $table->string('amaterno')->nullable();
            $table->string('tipo')->nullable();
            $table->string('phone')->nullable();
            $table->string('congregacion')->nullable();
            $table->string('hlc')->nullable();
            $table->string('email_jw')->nullable();
            $table->string('email')->nullable();
            $table->string('is_new')->nullable();
            $table->integer('ceh_id');
            $table->integer('ceh2_id');
            $table->integer('group_id');
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
        Schema::dropIfExists('people');
    }
}
