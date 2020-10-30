<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comments';

    public $incrementing = true;

    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $fillable = [ 
                            'comment', 
                            'active', 
                            'remarks', 
                            'created_at', 
                            'created_id', 
                            'updated_at', 
                            'updated_id', 
                            'deleted_at', 
                            'deleted_id'
                            ];
}
