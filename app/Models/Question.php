<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'question',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'answer',
        'exam_id',
        'is_active',
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }
}
