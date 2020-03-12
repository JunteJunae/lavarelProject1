<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    //

    protected $uploads = '/images/';

    protected $fillable = ['file'];



    public function getFileAttribute($photo){
        return $this->uploads . $photo; //this will always attach a photo and echo it out..we dont need to write to the images anymore
    }


}
