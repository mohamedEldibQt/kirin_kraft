<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaintingImage extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected  $dates = ['deleted_at'];

    protected $fillable = [
        'painting_id',
        'painting_imgs',
    ];
}
