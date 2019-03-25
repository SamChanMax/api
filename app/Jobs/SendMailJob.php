<?php

namespace App\Jobs;
use Illuminate\Support\Facades\Mail;

class SendMailJob extends Job
{
    protected $str;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($str)
    {
        $this->str = $str;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $content = 'content';
        $subject = 'subject';
        $toMail = '924835547@.com';
        Mail::raw($content, function ($message) use ($toMail, $subject) {
            $message->subject($subject);
            $message->to($toMail);
        });
    }
}
