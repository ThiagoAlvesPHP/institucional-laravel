<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConfigSocial extends Model
{
    use HasFactory;

    protected $table = "config_social";
    protected $fillable = ['name', 'link', 'icon', 'status'];
}
