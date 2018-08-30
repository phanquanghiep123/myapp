<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prisons extends Model
{
    public function users() {
        return $this->hasMany('App\Models\Users', 'prison_id');
    }

    public function duties() {
        return $this->hasMany('App\Models\Duties', 'prison_id');
    }
}
