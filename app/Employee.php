<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //

    protected $primaryKey = 'emp_id';
    protected $keyType = 'string';

    protected $fillable = ['gr_no','emp_id','date','apply_for','name',
        'cnic','gender','dob','birth_place','contact','religion',
        'nationality','blood_group','cast','marital_status',
        'spouse','address_present','address_permanent',
        'next_of_kin','kin_contact','kin_address',
        'primary_school','primary_date','secondary_school',
        'secondary_date','tertiary_school','tertiary_date',
        'profession','height','weight','hair_eye_color',
        'dissabilities','medication','illness'];


    public function witness(){
        return $this->hasMany(Witness::class);
    }

    public function experience(){
        return $this->hasMany(Experience::class);
    }

    public function uniform(){
        return $this->hasMany(Uniform::class);
    }

    public function status(){
        return $this->hasMany(Status::class);
    }

}
