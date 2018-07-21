<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applications', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('middle_name');
            $table->string('lname');
            $table->string('dob');
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
            $table->string('filename');
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
        Schema::dropIfExists('applications');
    }
}
