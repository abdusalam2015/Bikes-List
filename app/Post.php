<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    // if you need to change table name 
    protected $table = 'posts';
    // primary key
    public $primaryKey = 'id';
    //Timestamps
    public $timestamps = true;
}
