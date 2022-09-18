<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CofigMetas extends Model
{
    use HasFactory;

    protected $table = 'config_metas';
    protected $fillable = ['property', 'content'];
}
