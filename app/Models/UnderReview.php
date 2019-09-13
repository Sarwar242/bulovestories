<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnderReview extends Model
{
     protected $fillable = [
        'title', 'story',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
