<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    public $incrementing = true;

    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $fillable = [ 
                            'title', 
                            'content', 
                            'posted', 
                            'remarks', 
                            'created_at', 
                            'created_id', 
                            'updated_at', 
                            'updated_id', 
                            'deleted_at', 
                            'deleted_id'
                            ];
}
