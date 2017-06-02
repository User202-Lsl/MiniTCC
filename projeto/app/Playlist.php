<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Playlist extends Model
{
    public function movie()
    {
        return $this->belongsToMany("App\Movie");
    }
}
