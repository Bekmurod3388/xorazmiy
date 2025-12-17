<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'header_uz','header_ru','header_en',
        'description_uz','description_ru','description_en',
        'img','viewed'
    ];

    // Frontda $post->header deb chaqirsangiz locale bo‘yicha qaytaradi
    public function getHeaderAttribute(): string
    {
        $locale = app()->getLocale();
        return $this->{"header_{$locale}"} ?? $this->header_uz ?? '';
    }

    public function getDescriptionAttribute(): string
    {
        $locale = app()->getLocale();
        return $this->{"description_{$locale}"} ?? $this->description_uz ?? '';
    }
}
