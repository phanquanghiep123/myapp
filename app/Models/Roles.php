<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Roles extends Model
{
	protected $table = 'roles';
    public function users() {
        return $this->hasMany('App\Models\Users', 'role_id');
    }
 
}
