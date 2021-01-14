<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Witness extends Model
{
    //


    protected $fillable = ['employee_emp_id','witness1_name','witness1_cnic','witness1_present_address','witness1_permanent_address',
    'employee_emp_id','witness2_name','witness2_cnic','witness2_present_address','witness2_permanent_address',
];

    public function employee(){
        return $this->belongsTo(Employee::class);
    }


}
