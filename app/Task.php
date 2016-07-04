<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $table = 'tasks';


    /*
     * Get all employees associated with this task
     */
    public function employees()
    {
        return $this->belongsToMany('App\User');
    }

}
