<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'mission_id',
        'question',
        'type',
'correct_answer',
        'points',
        'order',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function mission()
    {
        return $this->belongsTo(Mission::class);
    }

    public function choices()
    {
        return $this->hasMany(Choice::class);
    }

    public function answers()
    {
        return $this->hasMany(UserAnswer::class);
    }
}