<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model 
{

    protected $table = 'questions';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

    public function qualifcations()
    {
        return $this->hasMany('App\Answer', 'qualifcation_id');
    }

}