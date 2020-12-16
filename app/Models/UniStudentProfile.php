<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UniStudentProfile extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'lga',
        'state',
        'country',
        'university',
        'level',
        'current_cgpa',
        'cgpa_scale'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
