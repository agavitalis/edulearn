<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'scholarship_id',
        'transaction_ref',
        'total_score'
    ];

    /**
     * Get the user that owns this application.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

     /**
     * Get a scholarship that is application is meant for.
     */
    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class);
    }

    public function written_exams()
    {
        return $this->hasMany(WrittenExam::class);
    }

}
