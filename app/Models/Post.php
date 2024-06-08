<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'main_post',
        'top_img',
        'thumb_img',
        'middle_img',
        'category',
        'total_read',
        'featured_post'
    ];  
}