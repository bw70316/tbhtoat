<?php

namespace App;


use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;


//implements SluggableInterface
class Post extends Model
{
    //

    use Sluggable;
    use SluggableScopeHelpers;


    protected $fillable = [
        'category_id',
        // 'post_id',
       'photo_id',
        'title',
       'body',
        // 'author',

    ];

    public function sluggable() {

        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function photo() {

        return $this->belongsTo('App\Photo');
    }

    public function category() {
        return $this->belongsTo('App\Category');
    }

    public function comments() {
        return $this->hasMany('App\Comment');
    }

    public function photoPlaceholder() {
        return "http://placehold.it/700x200";
    }
}
