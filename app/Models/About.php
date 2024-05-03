<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_about_s1',
        'description_about_s1',
        'about1_s1',
        'about2_s1',
        'about3_s1',
        'about4_s1',
        'about_img1_s1',
        'about_img2_s1',
        'about_img3_s1',
        'title_about_s2',
        'description_about_s2',
        'about1_s2',
        'about2_s2',
        'about_video_s2',
    ];
}
