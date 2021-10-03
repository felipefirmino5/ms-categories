<?php

namespace App\Models\Util;

use Ramsey\Uuid\Uuid as Ramsey;

trait Uuid
{
    public static function boot()
    {
        parent::boot();

        static::creating(function ($post) {
            $post->id = Ramsey::uuid4();
        });
    }
}
