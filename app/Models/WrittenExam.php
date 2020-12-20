<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WrittenExam extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        
        'exam_id',
        'application_id',

        'is_started',
        'start_time',

        'is_finished',
        'finish_time',
    ];
}
