<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    protected $fillable = [
        'title', 'story',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function lovers()
    {
        return $this->belongsTo(Models\User::class);
    }
}