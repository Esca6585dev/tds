<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Admin;
use App\Models\User;
use Mail;

class SendApplicationEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $application = $event->application;

        $user = User::findOrFail($application->user_id);

        Mail::send('emails.application-tds', ['application' => $application, 'user' => $user], function ($message) use ($application, $user) {
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME') . ' ' . env('APP_DOMAIN'));
            $message->subject('Salam size ' . $user->first_name . ' ' . $user->last_name . ' arza ugratdy!');
            $message->to(env('MAIL_RECEIVER_USERNAME'));
        });
    }
}
