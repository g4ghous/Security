<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    //
    protected $fillable = ['employee_emp_id', 'background', 'emergency', 'education',
        'experience', 'physical', 'medical', 'witness'];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

}
