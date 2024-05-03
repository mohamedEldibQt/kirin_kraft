<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Painting extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected  $dates = ['deleted_at'];

    protected $fillable = [
        'exhibition_id',
        'painting_name',
        'painting_image',
        'painting_description',
        'painting_size',
        'painting_colors',
    ];

    public function Exhibition()
    {
        return $this->belongsTo(Exhibition::class,'exhibition_id','id');
    }

    public function images()
    {
        return $this->hasMany(PaintingImage::class, 'painting_id');
    }
}
