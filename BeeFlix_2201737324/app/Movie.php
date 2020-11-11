<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    public $timestamps = false;
    protected $guarded = ["id"];

    public function genre() {
        return $this->belongsTo(Genre::class);
    }

    public function episodes() {
        return $this->hasMany(Episode::class);
    }
}
