<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veteran extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_uz','name_ru','name_en',
        'desc_uz','desc_ru','desc_en',
        'img',
    ];

    public function getNameAttribute(): string
    {
        $locale = app()->getLocale();
        return $this->{"name_{$locale}"} ?? $this->name_uz ?? '';
    }

    public function getDescAttribute(): string
    {
        $locale = app()->getLocale();
        return $this->{"desc_{$locale}"} ?? $this->desc_uz ?? '';
    }
}
