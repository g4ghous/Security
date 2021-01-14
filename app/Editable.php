<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Editable extends Model
{
    protected $fillable = ['weapon','bore','bullets',
        'employee_emp_id','location1', 'salary1', 'from1' , 'to1',
        'employee_emp_id','location2', 'salary2', 'from2' , 'to2',
        'employee_emp_id','location3', 'salary3', 'from3' , 'to3',
        'employee_emp_id','location4', 'salary4', 'from4' , 'to4',
        'employee_emp_id','location5', 'salary5', 'from5' , 'to5',
        ];
    
        public function employee(){
            return $this->belongsTo(Employee::class);
        }
}
