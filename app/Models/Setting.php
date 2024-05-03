<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'username',
        'phone_number',
        'email',
        'location',
        'logo',
        'cover',
        'bio',
        'title_background',
        'your_name',
        'title_card',
        'bio_card',
        'signature',
        'followers',
        'facebook',
        'instagram',
        'website',
    ];
}
