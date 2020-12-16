<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',

        'phone',

        'category',
        'school_name',
        'level',
        'exp_year_of_graduation',

        'country',
        'state_of_orgin',
        'lga',
        'address',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
