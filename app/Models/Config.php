<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Config extends Model
{
    use HasFactory;

    protected $table = 'configs';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
        'address_number',
        'address_district',
        'complement',
        'city',
        'state',
        'country',
        'link_whatsapp',
        'logo',
        'logo_dark',
        'favicon',
        'title',
        'text',
        'keywords'
    ];
}
