<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';

    function user() {
        return $this->belongsTo('App\User');
    }

    function tweet() {
        return $this->belongsTo('App\Tweet');
    }
}
