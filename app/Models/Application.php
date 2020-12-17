<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'user',
        'scholarship_id',
    ];

    /**
     * Get the user that owns this application.
     */
    public function post()
    {
        return $this->belongsTo(User::class);
    }


}
