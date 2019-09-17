<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Love extends Model
{
    public function loved()
    {
        return $this->belongsToMany(Story::class);
    }

}