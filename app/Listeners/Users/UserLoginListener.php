<?php

namespace App\Listeners\Users;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\UserLoginLog;
use Auth;

class UserLoginListener
{
    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        //

        //dd($event);
        $log = [];
        $log['subject'] = 'User Login Succesfully. Email: '.$event->user->email;
        //$log['url'] = $event->request->fullUrl();
        //$log['method'] = $event->request->method();
        $log['ip'] = $_SERVER['REMOTE_ADDR'];
        $log['agent'] = $_SERVER['HTTP_USER_AGENT'];;
        $log['user_id'] = Auth()->check() ? Auth()->user()->id : 1;
        UserLoginLog::create($log);
    }
}
