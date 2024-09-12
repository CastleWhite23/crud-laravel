<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plantas extends Model
{
    protected $fillable = ['Especie','Tipo','Porte'];  
    use HasFactory;
}