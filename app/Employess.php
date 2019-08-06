<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class employess extends Model
{
    protected $table ="employess";
    public function Daily_reports()
    {
        return $this->hasMany('App\daily_reports','Employee_id','ID');
    }
    public function Humans_project()
    {
        return $this->hasMany('App\humans_project','Employee_id','ID');
    }
    public function Payroll()
    {
        return $this->hasOne('App\payroll','Employee_id','ID');
    }
}
//commit
