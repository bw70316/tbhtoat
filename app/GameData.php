<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GameData extends Model {
protected $fillable = [
    'year',
    'level_id',
    'user_id',
    'win_id',
    'team_id',
    'option_id',
    'homeScore',
    'awayScore',
    'homeShots',
    'awayShots',
    'tie',
    'overtime_id'


];

public function user()
{

    return $this->belongsTo('App\User');
}

}