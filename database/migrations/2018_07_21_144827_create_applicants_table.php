<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->integer('number')->unique;
            $table->integer('date');
            $table->string('gender');
            $table->string('fathers_name');
            $table->string('mothers_name');
            $table->string('marital');
            $table->string('husband_name');
            $table->string('husband_idno');
            $table->string('tribe');
            $table->string('clan');
            $table->string('district');
            $table->string('division');
            $table->string('constituency');
            $table->string('location');
            $table->string('sub_location');
            $table->string('village');
            $table->string('home_address');
            $table->string('occupation');
            $table->string('image');
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
        Schema::dropIfExists('applicants');
    }
}
