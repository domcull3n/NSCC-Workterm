<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $table = 'companies';

    protected $guarded = [
        'id'
    ];

    /*
     * Get all tasks to do with the company
     */
    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

    public function latestTasks()
    {
        return $this->hasMany('App\Task')->orderBy('created_at');
    }

}
