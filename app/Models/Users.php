<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Users extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'staff_id', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function prison() {
        return $this->belongsTo('App\Models\Prisons', 'prison_id');
    }

    public function role() {
        return $this->belongsTo('App\Models\Roles', 'role_id');
    }

    public function duties() {
        return $this->hasMany('App\Models\Duties', 'created_by');
    }

    public function duty_expenses() {
        return $this->hasMany('App\Models\Duty_expenses', 'user_id');
    }

    public function duty_notes() {
        return $this->hasMany('App\Models\Duty_notes', 'user_id');
    }

    public function duty_confirmation_as_com() {
        return $this->hasMany('App\Models\Duty_confirmation', 'com_id');
    }

    public function duty_confirmation_as_user() {
        return $this->hasMany('App\Models\Duty_confirmation', 'user_id');
    }
}
