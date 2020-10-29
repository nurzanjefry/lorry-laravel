<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    protected $table = 'access';

    public $incrementing = true;

    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $fillable = [ 
                            'user_id', 
                            'role_id', 
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
