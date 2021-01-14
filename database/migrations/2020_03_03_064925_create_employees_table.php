<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->string('gr_no',64)->default(0);
            $table->string('emp_id',64)->primary();
            $table->date('date');
            $table->string('apply_for',50);
            $table->string('name',100);
            $table->bigInteger('cnic');
            $table->string('gender',6);
            $table->date('dob');
            $table->string('birth_place',30);
            $table->string('contact',15);
            $table->string('religion',20);
            $table->string('nationality',20);
            $table->string('blood_group',3);
            $table->string('cast',30);
            $table->string('marital_status',8);
            $table->string('spouse',100);
            $table->string('address_present',500);
            $table->string('address_permanent',500);
            $table->string('next_of_kin',100)->nullable();
            $table->string('kin_contact',15)->nullable();
            $table->string('kin_address',500)->nullable();
            $table->string('primary_school',100)->nullable();
            $table->date('primary_date')->nullable();
            $table->string('secondary_school',100)->nullable();
            $table->date('secondary_date')->nullable();
            $table->string('tertiary_school',100)->nullable();
            $table->date('tertiary_date')->nullable();
            $table->string('profession',30)->nullable();
            $table->string('height',10)->nullable();
            $table->integer('weight')->nullable();
            $table->string('hair_eye_color',20)->nullable();
            $table->string('dissabilities',100)->nullable();
            $table->string('medication',500)->nullable();
            $table->string('illness',500)->nullable();
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
        Schema::dropIfExists('employees');
    }
}
