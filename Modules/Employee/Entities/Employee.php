<?php

namespace Modules\Employee\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Modules\Employee\Database\factories\EmployeeFactory;

class Employee extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     */    
    protected $fillable = [
        'nama',
        'alamat',
        'email',
        'no_telp'
    ];
    
    protected static function newFactory()
    {
        return \Modules\Employee\Database\factories\EmployeeFactory::new();
    }
}
