<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Text extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name_tm',
        'name_en',
        'name_ru',
        'category_id',
    ];
    
    public function parent()
    {
        return $this->belongsTo(Category::class,'category_id', 'id');
    }
}
