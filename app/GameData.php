<?php

namespace App;


use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;



class GameData extends Model {

    USE SluggableScopeHelpers;
    use Sluggable;
    

    protected $casts = [ 'team' => 'id' ];
 
    protected $table="game_datas";
// protected $fillable = [
//     'year',
//     'level_id',
//     'user_id',
//     'win_id',
//     'team_id',
//     'option_id',
//     'homeScore',
//     'awayScore',
//     'homeShots',
//     'awayShots',
//     'tie',
//     'overtime_id'


// ];
public function sluggable()
{
    return [
        'slug' => [
            'source' => 'team'
        ]
    ];
}

public function getRouteKeyName()
    {
        return 'slug';
    }


public function user()
{

    return $this->belongsTo('App\User');
}

public function years()
{

    return $this->belongsTo('App\Years');
}

}