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
        'transaction_ref'
    ];

    /**
     * Get the user that owns this application.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

     /**
     * Get a profile that belongs to this user.
     */
    public function scholarship()
    {
        return $this->belongsTo(Scholarship::class);
    }

}
