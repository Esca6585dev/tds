<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_tm',
        'name_en',
        'name_ru',
        'name_tr',
        'category_id',
    ];

    public function parent()
    {
        return $this->belongsTo(Category::class,'category_id', 'id');
    }

    public function getTopParent()
    {
        return $this->category_id;
    }

    public function categories()
    {
        return $this->hasMany(Category::class,'category_id', 'id');
    }

    public function childrenCategories()
    {
        return $this->hasMany(Category::class)->with('categories');
    }

    protected function fillableData()
    {
        return $this->fillable;
    }
}
