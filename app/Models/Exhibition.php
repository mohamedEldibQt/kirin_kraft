<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Exhibition extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected  $dates = ['deleted_at'];

    protected $fillable = [
        'code',
        'exhibition_name',
        'exhibition_image',
        'exhibition_icon',
    ];
    public function Paintings()
    {
        return $this->hasMany(Painting::class, 'exhibition_id');
    }
}
