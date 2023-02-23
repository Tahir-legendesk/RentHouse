<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inquiry extends Model
{
    public function house()
    {
        return $this->belongsTo(House::class);
    }
}
