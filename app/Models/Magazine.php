<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Magazine extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'url',
    ];

    public function scopeSearch($query, $term) {
        $term = "%$term%"; // Add wildcards for a "like" search
        $query->where('name', 'like', $term)
              ->orWhere('url', 'like', $term);
    }

    public function getNameAttribute($value) 
    {
        return ucfirst($value);
    }

    public function setUrlAttribute($value) 
    {
        $this->attributes['url'] = strtolower($value);
    }

    public function image()
    {
        return $this->url;
    }

    protected function fillableData()
    {
        return $this->fillable;
    }
}