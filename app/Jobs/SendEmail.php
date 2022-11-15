<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use PDF;
use Mail;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $emaildetails;

    public function __construct($emaildata)
    {
        $this->emaildetails = $emaildata;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        try{

            $data = $this->emaildetails;

            \Log::debug($data);

            $MES = ['data'=>$data];

            
            Mail::send("email.emailtemplate", $MES, function($message)use($data) {
                $message->to($data["email"], $data["name"])
                    ->subject($data["subject"])
                    ->from('noreply@little.africa', 'Team Little');
                $message->cc('lukeolende@mailhub.com');
            });

        }catch(\Exception $exception){

        }
    }
}
