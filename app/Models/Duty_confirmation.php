<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Duty_confirmation extends Model
{
    public function com_user() {
        return $this->belongsTo('App\Models\Users', 'com_id');
    }

    public function user() {
        return $this->belongsTo('App\Models\Users', 'user_id');
    }

    public function duty() {
        return $this->belongsTo('App\Models\Duties', 'duty_id');
    }
}
