<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    protected $table = 'users';

    /*
     * USER AND EMPLOYEE USED AS INTERCHANGABLE TERMS FOR NOW
     * DB table = Employee
     * Model = User ('App\User')
     */

    /**
     * Changed default name of model to match employees table
     * because of the default user table being renamed to
     * employees
     *
     * @var string
     */
//    protected $table = 'employee';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /*
     * Get all tasks associated with this employee
     */
    public function tasks()
    {
        return $this->belongsToMany('App\Task');
    }
}
