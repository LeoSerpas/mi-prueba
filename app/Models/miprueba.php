<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class miprueba extends Model
{
    protected $fillable = ['id','nombre','apellido','edad','email','habilidades'];
    protected $dates = ['created_at','updated_at'];
    //use HasFactory;
}
