<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    //

    protected $fillable = ['employee_emp_id','organization1', 'position1', 'from1' , 'to1',
    'employee_emp_id','organization2', 'position2', 'from2' , 'to2',
    'employee_emp_id','organization3', 'position3', 'from3' , 'to3',
    'employee_emp_id','organization4', 'position4', 'from4' , 'to4',
    'employee_emp_id','organization5', 'position5', 'from5' , 'to5',
    ];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }

}
