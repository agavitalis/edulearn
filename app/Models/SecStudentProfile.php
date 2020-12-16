<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecStudentProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone',
        'address',
        'lga',
        'state',
        'country',
        'school',
        'class',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
