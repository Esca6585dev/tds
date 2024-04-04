<div class="sample__container">
    <div class="sample__column__left">
    <div class="sample__column__top">
        <textarea class="textarea__blanka" name="company_name_tm" placeholder="{{ __('Company name') }}">{{ $user->letterhead->company_name_tm ?? '' }}</textarea>
    </div>
    <div class="sample__column__bottom">
        <textarea class="input__blanka" name="address_tm" placeholder="{{ __('Address') }} 744000, Türkmenistan, Aşgabat şäheri, Oguzhan köçesi, 201-nji jaýy">{{ $user->letterhead->address_tm ?? '' }}</textarea>
        <textarea class="input__blanka" name="phone_number_tm" placeholder="{{ __('Phone number') }}: (+993 12) 95-73-55; Faks: (+993 12) 95-73-56">{{ $user->letterhead->phone_number_tm ?? '' }}</textarea>
        <textarea class="input__blanka" name="email_tm" placeholder="E-mail: tds@sanly.tm">{{ $user->letterhead->email_tm ?? '' }}</textarea>
    </div>
    </div>
    <div class="sample__column__center">
        <img src="{{ asset($user->letterhead->image ?? 'img/Emblem_of_Turkmenistan.png' ) }}" alt="{{ __('We request that you change the company logo!') }}" class="emblem__img" onclick="changeImage()" title="{{ __('If you want to change your company logo go to profile section') }}">
    </div>
    <div class="sample__column__right">
    <div class="sample__column__top">
        <textarea class="textarea__blanka" name="company_name_en" placeholder="Company name">{{ $user->letterhead->company_name_en ?? '' }}</textarea>
    </div>
    <div class="sample__column__bottom">
        <textarea class="input__blanka" name="address_en" placeholder="Address 744000, Turkmenistan, Ashgabat city, Oguzhan street, 201">{{ $user->letterhead->address_en ?? '' }}</textarea>
        <textarea class="input__blanka" name="phone_number_en" placeholder="Phone number: (+993 12) 95-73-55; Fax: (+993 12) 95-73-56">{{ $user->letterhead->phone_number_en ?? '' }}</textarea>
        <textarea class="input__blanka" name="email_en" placeholder="E-mail: tds@sanly.tm">{{ $user->letterhead->email_en ?? '' }}</textarea>
    </div>
    </div>
</div>

<x-user.blank.hr />

<x-user.blank.date />