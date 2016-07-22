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

    /*
     * Get the company that this task is for
     */
    public function company()
    {
        return $this->belongsTo('App\Company');
    }

}
