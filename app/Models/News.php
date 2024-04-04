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
        'name_tr',
        'body_tm',
        'body_en',
        'body_ru',
        'body_tr',
        'category_id',
        'view',
        'url',
        'image',
        'created_at',
        'updated_at',
    ];

    protected function fillableData()
    {
        return $this->fillable;
    }
}
