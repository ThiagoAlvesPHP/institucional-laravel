<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceComplement extends Model
{
    use HasFactory;

    protected $table = 'service_complement';
    protected $fillable = ['service_id', 'icon', 'text'];
}
