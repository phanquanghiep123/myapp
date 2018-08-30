<?php

namespace App\Models;
use DB;
use Illuminate\Database\Eloquent\Model;

class Rules extends Model
{
    protected $table = 'rules';
    protected $fillable = [
        'module_id','role_id','add', 'update', 'view','delete'
    ];
    protected $primaryKey = (['module_id', 'role_id']);
    public $incrementing = false;
    protected function GetModulesAllow ($RoleID){
        return $this
        ->rightJoin("modules",function($q) use ($RoleID)
        {
            $q->on('modules.id', '=', 'rules.module_id')
            ->on('rules.role_id', '=', DB::raw($RoleID))
            ->orderBy("modules.sort");
        })
        ->where("modules.status","=","1")
        ->select("modules.*","rules.view","rules.add","rules.update","rules.delete")
        ->groupBy("modules.id")
        ->get();
    }
    protected function getModelByUser($RoleID){
        return $this
        ->join ("modules","modules.id","=","sys_rules.module_id")
        ->join("sys_model_descriptions","sys_model_descriptions.sys_model_id","=","modules.id")
        ->join ("sys_roles","sys_roles.id","sys_rules.role_id") 
        ->where("sys_rules.role_id","=",$RoleID)
        ->where("sys_rules.isview","=","1")
        ->where("sys_model_descriptions.language_id","=",$LangID)
        ->select("modules.*","sys_model_descriptions.name")
        ->orderBy("modules.sort_order")
        ->groupBy("modules.id")
        ->get();
    }
    protected function _validateRULE($role,$path,$action){
        return $this->join("modules","modules.id","=","rules.module_id")
        ->select("modules.*")
        ->where([
            ["rules.role_id","=",$role],
            ["rules.".$action,"=",1],
            ["modules.route","=",$path]
        ])->first();
    }
}
