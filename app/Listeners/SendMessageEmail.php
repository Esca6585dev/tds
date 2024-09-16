<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Admin;
use App\Models\User;
use App\Mail\MailSended;
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

        // Mail::to(env('MAIL_USERNAME'))->queue(new MailSended($message, $user, 'Salam size ' . $user->first_name . ' ' . $user->last_name . ' hat ýazdy!'));
        Mail::to(env('MAIL_RECEIVER_USERNAME_CORP_TDS_INFO'))->queue(new MailSended($message, $user, 'Salam size ' . $user->first_name . ' ' . $user->last_name . ' hat ýazdy!'));
        // Mail::to(env('MAIL_ADMIN'))->queue(new MailSended($message, $user, 'Salam size ' . $user->first_name . ' ' . $user->last_name . ' hat ýazdy!'));
        // Mail::to($user->email)->queue(new MailSended($message, $user, 'Salam ' . $user->first_name . ' ' . $user->last_name . ' siziň hatyňyz kabul edildi!'));
    }
}
