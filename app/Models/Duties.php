<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Duties extends Model
{
    public function type() {
        return $this->belongsTo('App\Models\Duty_type', 'duty_type_id');
    }

    public function prison() {
        return $this->belongsTo('App\Models\Prisons', 'prison_id');
    }

    public function user() {
        return $this->belongsTo('App\Models\Users', 'created_by');
    }

    public function duty_expenses() {
        return $this->hasMany('App\Models\Duty_expenses', 'duty_id');
    }

    public function duty_confirmation() {
        return $this->hasOne('App\Models\Duty_confirmation', 'duty_id');
    }
}
