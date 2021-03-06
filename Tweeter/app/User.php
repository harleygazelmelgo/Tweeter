<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    function profile() {
        return $this->hasOne('App\Profile');
    }


    function tweets() {
        return $this->hasMany('App\Tweet');
    }


    function follow_relationship() {
        return $this->hasMany('App\FollowRelationship');
    }

    function likes() {
        return $this->hasMany('App\Likes');
    }

    function comments() {
        return $this->hasMany('App\Comments');
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
