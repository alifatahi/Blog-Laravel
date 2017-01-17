<?php

namespace blog;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
        protected $fillable = ['img','title','body'];
}
