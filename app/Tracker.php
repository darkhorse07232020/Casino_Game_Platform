<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tracker extends Model
{
    //
    protected $fillable = [ 'ip', 'current_date','hits' ]; 

    
    public static function getCount(){
        return Tracker::count();
    }
}
