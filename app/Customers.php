<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customers extends Model
{
    protected $table = "customers";
    public function projects()
    {
        return $this->hasMany('App\projects','Customer_id','ID');
    }
}
//ccommit
