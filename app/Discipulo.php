<?php

namespace LaraPok;

use Illuminate\Database\Eloquent\Model;

class Discipulo extends Model
{
    public function trainer()
    {
        return $this->belongsTo('LaraPok\Trainer');
    }
}
