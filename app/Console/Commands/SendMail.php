<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;

class SendMail extends Command
{
    /**
     * 命令行执行命令
     * @var string
     */
    protected $signature = 'SendMail';

    /**
     * 命令描述
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //这里编写需要执行的动作
        $content = 'content';
        $toMail = '924835547@qq.com';
        $subject = 'subject';
        Mail::raw($content, function ($message) use ($toMail, $subject) {
            $message->subject($subject);
            $message->to($toMail);
        });


    }
}
