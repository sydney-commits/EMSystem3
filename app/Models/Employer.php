<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

   // protected $table = 'employers';

    protected $fillable =[
        'name','email','phone','
        address','company','subscription_status','logo','active'


    ];


    public function employees()
    {
        return $this->hasMany(Employee::class);
    }
}
