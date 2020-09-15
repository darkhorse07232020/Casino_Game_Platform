<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;

class Capturegc extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id','image_path','image_ai_data','warden_id','garbage_collector_id','latitude','longitude','location','device_details','status','assigned_by'
    ];

    public function captureGc(){
        return $this->belongsTo('App\User');
    }

    public static function gcCount(){
        return Capturegc::count();
    }

    public static function gcAlottedCount(){
        return Capturegc::where('status',0)->where('warden_id',Auth::user()->id)->count();
    }
}
