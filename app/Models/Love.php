<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Love extends Model
{
    protected $guarded = [];

    protected $fillable = [
        'user_id', 'story_id',
    ];
    public function user()
    {
        return $this->belongsToMany(User::class);
    }
    public function story()
    {
        return $this->belongsToMany(Story::class);
    }
}
