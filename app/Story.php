<?php

namespace App;

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
}
