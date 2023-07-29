<?php

namespace App\Jobs;

use App\Mail\ContactMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Mail;

class SendContactForm implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    /**
     * Create a new job instance.
     */
    public function __construct(
        public string $name,
        public string $email,
        public string $message,
    )
    {
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        $receiver = Env::get("CONTACT_FORM_RECEIVER");

        Mail::to($receiver)->send(new ContactMail($this->name, $this->email, $this->message));
    }
}
