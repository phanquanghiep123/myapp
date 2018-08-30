<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Duty_expenses extends Model
{
    public function duty() {
        return $this->belongsTo('App\Models\Duties', 'duty_id');
    }

    public function user() {
        return $this->belongsTo('App\Models\Users', 'user_id');
    }
}
