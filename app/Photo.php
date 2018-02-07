<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $fillable = ['file'];
    protected $uploadPath = '/images/';

    //This allows the file to be persisted to the DB

    
    //

    //this allows photos to accessed by the model and stored (see admin.users)
    public function getFileAttribute($photo) {

        return  $this->uploadPath . $photo;

    }
}
