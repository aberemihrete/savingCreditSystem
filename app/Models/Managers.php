<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Managers extends Model
{
    use HasFactory;
    protected $fillable = [
        'Fname',
        'Lname',
        'sex',
        'zone',
        'woreda',
        'address',
        'phone'
        ];
        public function Employees(){
            return $this->hasMany(Employee::class);
        }
       
}
