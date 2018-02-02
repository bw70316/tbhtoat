<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    //


    protected $fillable = [
        'option_id',
        'user_id',
        'name_id',
        'position_id',
        'gw_goal',
        'goals_scored',
        'assists',
        'saves'



    ];

    public function user()
    {

        return $this->belongsTo('App\User');
    }

    public function game() {

        return $this->belongsTo('App\Game');
    }

    public function option() {

        return $this->belongsTo('App\Option');
    }

    public function name() {
        return $this->belongsTo('App\Name');
    }

    public function position() {
        return $this->belongsTo('App\Position');
    }
}
