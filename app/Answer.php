<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Answer extends Model 
{

    protected $table = 'answers';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function qualifcation()
    {
        return $this->belongsTo('App\Question', 'qualifcation_id');
    }

    public function user()
    {
        return $this->belongsToMany('App\User');
    }

}