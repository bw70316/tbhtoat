<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    //

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

    public function win(){
        return $this->belongsTo('App\Win');
    }

    public function tie() {

        return $this->belongsTo('App\Tie');
    }

    public function team() {

        return $this->belongsTo('App\Team');
    }

    public function option() {

        return $this->belongsTo('App\Option');
    }

    public function level() {

        return $this->belongsTo('App\Level');
    }

    public function player() {
        return $this->hasMany('App\Players');
    }

}
