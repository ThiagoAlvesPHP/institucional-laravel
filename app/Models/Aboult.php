<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aboult extends Model
{
    use HasFactory;

    protected $table = 'aboult';
    protected $fillable = ['name'];

}
