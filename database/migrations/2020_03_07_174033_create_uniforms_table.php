<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUniformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('uniforms', function (Blueprint $table) {
            $table->bigIncrements('id')->autoIncrement();
            $table->string('employee_emp_id',64);
            $table->string('item',30);
            $table->integer('quantity');
            $table->date('date_issued');
            $table->date('date_recieved',500);
            $table->string('location',50);
            $table->string('remarks',250);
            $table->string('status',1)->default('A');
            $table->timestamps();
            $table->foreign('employee_emp_id')->references('emp_id')->on('employees')->onDelete('cascade');

        });

       /* DB::unprepared("
        CREATE TRIGGER uniform_update_bfr_ins Before INSERT ON `uniforms` FOR EACH ROW
        
        BEGIN
            DECLARE rowcount INT;
    
            SELECT COUNT(*) 
            INTO rowcount
            FROM uniforms
            where employee_emp_id= NEW.employee_emp_id and item=NEW.item;
        
        IF rowcount > 0 THEN
            update uniforms set status = 'I' where employee_emp_id= NEW.employee_emp_id and item=NEW.item;
        END IF;
         
        END
        ");

*/


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('uniforms');
    }
}
