<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'start_date',
        'end_date',
        'cover_picture',
        'category',
        'application_fee',
        'category',
        'is_active',
    ];

    /**
     * The exams that belong to the scholarship.
     */
    public function exams()
    {
        return $this->belongsToMany(Exam::class,'exam_scholarship');
    }

}
