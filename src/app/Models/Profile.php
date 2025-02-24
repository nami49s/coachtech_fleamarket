<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'profile_image',
        'name',
        'postal_code',
        'address',
        'building',
    ];

    public function user()
    {
        return $this->belongTo(User::class);
    }
}
