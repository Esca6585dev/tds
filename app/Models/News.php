<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $table = 'news';

    protected $fillable = [
        'name_tm',
        'name_en',
        'name_ru',
        'body_tm',
        'body_en',
        'body_ru',
        'category_id',
        'view',
        'image',
    ];
}
