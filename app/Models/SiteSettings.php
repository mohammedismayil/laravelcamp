<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteSettings extends Model
{
    use HasFactory;

    protected $fillable = [
        'default_language',
        'default_currency',
        'api_key',
        'app_url',
        'languages',
        'currency',
    ];
}
