<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdetails', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->char('gender', 2);
            $table->char('maritalstatus', 2);
            $table->date('dob');
            $table->string('pob');
            $table->string('stateoforigin');
            $table->string('phaddress');
            $table->string('profession');
            $table->string('companyname')->nullable();
            $table->string('companyaddress')->nullable();
            $table->string('kinfullname');
            $table->string('kinphonenum');
            $table->string('kinaddress');
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
        Schema::dropIfExists('userdetails');
    }
}
