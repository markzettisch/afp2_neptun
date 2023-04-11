<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class QR extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'user_subject',
    ];

    public function userSubject()
    {
        return $this->belongsTo(UserSubject::class);
    }
}