<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class LoserData extends Model
{
    //

    use SluggableScopeHelpers;
    use Sluggable;

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
}
