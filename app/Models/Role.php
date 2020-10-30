<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';

    public $incrementing = true;

    protected $dates = ['created_at','updated_at','deleted_at'];

    protected $fillable = [ 
                            'role', 
                            'remarks', 
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
