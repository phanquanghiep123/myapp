<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Modules extends Model
{
    protected $table = 'modules';
    protected function getModelByUserDefault(){
        return $this
        ->select("modules.*")
        ->orderBy("modules.sort")
        ->get();
    }
}
