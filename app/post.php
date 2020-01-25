<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    //
    protected $table = 'posts';
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
        'post_created_at'
    ];
}
