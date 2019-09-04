<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMonthlyContributionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monthly_contributions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('begin_date');
            $table->dateTime('close_date')->nullable();
            $table->decimal('total_contrib', 10, 2)->nullable();
            $table->boolean('current')->default(false);
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
        Schema::dropIfExists('monthly_contributions');
    }
}
