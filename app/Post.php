<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'slug', 'body', 'photo'];

    protected $primaryKey = 'post_id';

    protected $hidden = [];
}
