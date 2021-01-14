<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uniform extends Model
{
    //
    protected $fillable = ['employee_emp_id','item','quantity','date_issued',
        'date_recieved','location','remarks','status','new_used'];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

}
