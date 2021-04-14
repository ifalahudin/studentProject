<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    
    //mass assignment(dimana filed "id" tidak boleh diisi oleh user)
    protected $guarded = ['id']; 
}
