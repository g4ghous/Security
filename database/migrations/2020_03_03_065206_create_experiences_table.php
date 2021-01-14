<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('employee_emp_id',64);
            $table->string('organization1',100);
            $table->string('position1',50);
            $table->date('from1');
            $table->date('to1',500);
            $table->string('organization2',100)->nullable();
            $table->string('position2',50)->nullable();
            $table->date('from2')->nullable();
            $table->date('to2',500)->nullable();
            $table->string('organization3',100)->nullable();
            $table->string('position3',50)->nullable();
            $table->date('from3')->nullable();
            $table->date('to3',500)->nullable();
            $table->string('organization4',100)->nullable();
            $table->string('position4',50)->nullable();
            $table->date('from4')->nullable();
            $table->date('to4',500)->nullable();
            $table->string('organization5',100)->nullable();
            $table->string('position5',50)->nullable();
            $table->date('from5')->nullable();
            $table->date('to5',500)->nullable();
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
        Schema::dropIfExists('experiences');
    }
}
