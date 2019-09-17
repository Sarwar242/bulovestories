<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Notice extends Model
{
    protected $fillable = [
        'title', 'details',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
