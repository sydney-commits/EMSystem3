<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'employer_id','name','email','phone',
        'date_of_birth','address','position','department',
        'emergency_contact_name','emergency_contact_phone'
    ];


    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function attendance()
    {
        return $this->hasMany(Attendance::class);
    }
}
