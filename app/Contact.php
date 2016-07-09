<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contacts';


    /*
     * Return the company that this contact is a part of
     */
    public function company ()
    {
        return $this->belongsTo('App\Company');
    }

}
