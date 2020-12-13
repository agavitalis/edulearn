<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'duration',
        'description',
        'instruction',
        'category',
        'is_active',
    ];

    public function questions()
    {
        return $this->hasMany(Question::class);
    }
    
    /**
     * The scholarships that belong to the exam.
     */
    public function scholarships()
    {
        return $this->belongsToMany(Scholarship::class,'exam_scholarship');
    }
}