<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Admin;
use App\Models\User;
use Mail;

class SendMessageEmail
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
        $message = $event->message;

        $user = User::findOrFail($message->user_id);

        Mail::send('emails.message', ['message' => $message, 'user' => $user], function ($message) use ($application, $user) {
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME') . ' ' . env('APP_DOMAIN'));
            $message->subject('Salam size ' . $user->first_name . ' ' . $user->last_name . ' hat ýazdy ýazdy!');
            $message->to(env('MAIL_RECEIVER_USERNAME'));
        });

        Mail::send('emails.message', ['message' => $message, 'user' => $user], function ($message) use ($application, $user) {
            $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME') . ' ' . env('APP_DOMAIN'));
            $message->subject('Salam size ' . $user->first_name . ' ' . $user->last_name . ' hat ýazdy ýazdy!');
            $message->to(env('MAIL_TDS_USERNAME'));
        });
    }
}
