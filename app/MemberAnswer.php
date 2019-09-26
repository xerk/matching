<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class MemberAnswer extends Model 
{

    protected $table = 'answer_user';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];

}