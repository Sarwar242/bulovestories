<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Overtrue\LaravelFollow\Traits\CanBeLiked;

class Story extends Model
{
    use CanBeLiked;

    protected $fillable = [
        'title', 'story',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function lovers()
    {
        return $this->belongsTo(User::class);
    }
    public function likes()
    {
        return $this->belongsToMany(User::class, 'loves', 'story_id', 'user_id');
    }
}