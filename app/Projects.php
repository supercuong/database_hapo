<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projects extends Model
{
    protected $table ="projects";
    public function Humans_project()
    {
        return $this->hasMany('App\projects','project_id','ID');
    }
}
//commit
