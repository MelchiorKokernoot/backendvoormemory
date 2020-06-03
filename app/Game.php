<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    public $timestamps = false;

    public function highscores()
    {
        return $this->belongsToMany('App\User','high_scores')->withPivot('score');
    }
}
