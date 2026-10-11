<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'location',
        'description',
        'reading',
        'image',
        'icon',
        'order',
        'is_unlocked',
        'is_active',
    ];

    protected $casts = [
        'is_unlocked' => 'boolean',
        'is_active' => 'boolean',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function progress()
    {
        return $this->hasMany(UserProgress::class);
    }
}