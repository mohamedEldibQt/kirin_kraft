<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory;


    use SoftDeletes;

    protected  $dates = ['deleted_at'];

    protected $fillable = [
        'reviewer_name',
        'reviewer_email',
        'reviewer_reply',
    ];
}
