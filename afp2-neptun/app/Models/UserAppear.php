<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;



class UserAppear extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'user_subject',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userSubject()
    {
        return $this->belongsTo(UserSubject::class);
    }
}
