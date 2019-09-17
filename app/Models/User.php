<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Overtrue\LaravelFollow\Traits\CanLike;

class User extends Authenticatable
{
    use CanLike, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'profession', 'password', 'status',
        'ip_address', 'remember_token',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function story()
    {
        return $this->hasMany(Story::class);
    }

    public function loves()
    {
        return $this->belongsTo(Story::class);
    }

    public function likes()
    {
        return $this->belongsToMany(Story::class, 'user_id', 'story_id');
    }

}