<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PageSettings extends Model
{
    protected $fillable = [
        'name',
        "short_desc",
        "school_name",
        'version',
        'contact_email',
        'logo',
    ];
    
    use HasFactory;
}
