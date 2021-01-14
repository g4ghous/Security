<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWitnessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('witnesses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_emp_id',64);
            $table->string('witness1_name',100);
            $table->string('witness1_cnic',13);
            $table->string('witness1_present_address',500);
            $table->string('witness1_permanent_address',500);
            $table->string('witness2_name',100);
            $table->string('witness2_cnic',13);
            $table->string('witness2_present_address',500);
            $table->string('witness2_permanent_address',500);
            
            $table->timestamps();
            $table->foreign('employee_emp_id')->references('emp_id')->on('employees')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('witnesses');
    }
}
