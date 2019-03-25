<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use App\Jobs\SendMailJob as EmailJob;
use Carbon\Carbon;
class mail extends BaseController
{
    public function send()
    {
        $emil = new EmailJob('924835547@qq.com');
        $emil->delay(Carbon::now()->addSecond(1));
        dispatch($emil);


    }
}
