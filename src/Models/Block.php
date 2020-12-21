<?php

namespace Aldrumo\Blocks\Models;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
    protected $fillable = [
        'slug',
        'content',
    ];

    public function item()
    {
        return $this->morphTo();
    }
}
