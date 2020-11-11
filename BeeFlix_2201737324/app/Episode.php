<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episode extends Model
{
    public $timestamps = false;
    protected $guarded = ["id"];

    public function movie() {
        return $this->belongsTo(Movie::class);
    }
}
