<?php

namespace App;


use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Illuminate\Database\Eloquent\Model;



class TeamRank extends Model {

    USE SluggableScopeHelpers;
    use Sluggable;
    

    protected $casts = [ 'am' => 'id' ];
 
    protected $table="rank_datas";
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
            'source' => 'am'
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