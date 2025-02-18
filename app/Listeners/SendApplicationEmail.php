<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Admin;
use App\Models\User;
use App\Models\Section;
use App\Mail\ApplicationSended;
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

        $section = Section::where('name_tm', $application->bolum)->first();
        
        $parent_section = Section::findOrFail($section->section_id);

        Mail::to($user->email)->queue(new ApplicationSended($application, $user, $section, $parent_section, 'Salam ' . $user->first_name . ' ' . $user->last_name . ' siziň arzaňyz kabul edildi!'));
        
        if($parent_section->name_tm == '«Türkmenstandartlary» baş döwlet gullugy'){
            Mail::to(env('MAIL_RECEIVER_USERNAME_CORP_TDS'))->queue(new ApplicationSended($application, $user, $section, $parent_section, 'Salam size ' . $user->first_name . ' ' . $user->last_name . ' arza ugratdy!'));
            Mail::to(env('MAIL_RECEIVER_USERNAME_CORP_TSMM'))->queue(new ApplicationSended($application, $user, $section, $parent_section, 'Salam size ' . $user->first_name . ' ' . $user->last_name . ' arza ugratdy!'));
        } else if($parent_section->name_tm == 'Türkmen standart maglumat merkezi') {
            Mail::to(env('MAIL_RECEIVER_USERNAME_CORP_TDS'))->queue(new ApplicationSended($application, $user, $section, $parent_section, 'Salam size ' . $user->first_name . ' ' . $user->last_name . ' arza ugratdy!'));
            Mail::to(env('MAIL_RECEIVER_USERNAME_CORP_TSMM'))->queue(new ApplicationSended($application, $user, $section, $parent_section, 'Salam size ' . $user->first_name . ' ' . $user->last_name . ' arza ugratdy!'));
        }
    }
}
