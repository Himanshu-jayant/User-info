<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uinfo extends Model
{
    use HasFactory;
    protected $table='user_info';
    protected $fillable = ['fname','lname','email','dob','mobile','designation','gender','hobbies'];
}
