<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statuses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_emp_id',64);
            $table->string('background',1)->default('N');
            $table->string('emergency',1)->default('N');
            $table->string('education',1)->default('N');
            $table->string('experience',1)->default('N');
            $table->string('physical',1)->default('N');
            $table->string('medical',1)->default('N');
            $table->string('witness',1)->default('N');
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
        Schema::dropIfExists('statuses');
    }
}
