<div class="sample__container">
    <div class="sample__column__left">
    <div class="sample__column__top">
        <textarea class="textarea__blanka" name="company_name_tm" placeholder="{{ Auth::user()->letterhead->company_name_tm ?? '«TÜRKMENSTANDARTLARY» BAŞ DÖWLET GULLUGY' }}">{{ Auth::user()->letterhead->company_name_tm ?? '«TÜRKMENSTANDARTLARY» BAŞ DÖWLET GULLUGY' }}</textarea>
    </div>
    <div class="sample__column__bottom">
        <textarea class="input__blanka" name="address_tm" placeholder="{{ Auth::user()->letterhead->address_tm ?? '744000, Türkmenistan, Aşgabat şäheri, Oguzhan köçesi, 201-nji jaýy' }}">{{ Auth::user()->letterhead->address_tm ?? '744000, Türkmenistan, Aşgabat şäheri, Oguzhan köçesi, 201-nji jaýy' }}</textarea>
        <textarea class="input__blanka" name="phone_number_tm" placeholder="{{ Auth::user()->letterhead->phone_number_tm ?? 'Telefon: (+993 12) 95-73-55; Faks: (+993 12) 95-73-56' }}">{{ Auth::user()->letterhead->phone_number_tm ?? 'Telefon: (+993 12) 95-73-55; Faks: (+993 12) 95-73-56' }}</textarea>
        <textarea class="input__blanka" name="email_tm" placeholder="{{ Auth::user()->letterhead->email_tm ?? 'E-mail: tds@sanly.tm' }}">{{ Auth::user()->letterhead->email_tm ?? 'E-mail: tds@sanly.tm' }}</textarea>
    </div>
    </div>
    <div class="sample__column__center">
    <img src="{{ asset(Auth::user()->letterhead->image ?? 'img/Emblem_of_Turkmenistan.png') }}" alt="{{ asset(Auth::user()->letterhead->image ?? 'img/Emblem_of_Turkmenistan.png') }}" class="emblem__img">
    </div>
    <div class="sample__column__right">
    <div class="sample__column__top">
        <textarea class="textarea__blanka" name="company_name_en" placeholder="{{ Auth::user()->letterhead->company_name_en ?? '«TURKMENSTANDARTLARY» MAIN STATE SERVICE' }}">{{ Auth::user()->letterhead->company_name_en ?? '«TURKMENSTANDARTLARY» MAIN STATE SERVICE' }}</textarea>
    </div>
    <div class="sample__column__bottom">
        <textarea class="input__blanka" name="address_en" placeholder="{{ Auth::user()->letterhead->address_en ?? '744000, Turkmenistan, Ashgabat city, Oguzhan street, 201' }}">{{ Auth::user()->letterhead->address_en ?? '744000, Turkmenistan, Ashgabat city, Oguzhan street, 201' }}</textarea>
        <textarea class="input__blanka" name="phone_number_en" placeholder="{{ Auth::user()->letterhead->phone_number_en ?? 'Phone Number: (+993 12) 95-73-55; Fax: (+993 12) 95-73-56' }}">{{ Auth::user()->letterhead->phone_number_en ?? 'Phone Number: (+993 12) 95-73-55; Fax: (+993 12) 95-73-56' }}</textarea>
        <textarea class="input__blanka" name="email_en" placeholder="{{ Auth::user()->letterhead->email_en ?? 'E-mail: tds@sanly.tm' }}">{{ Auth::user()->letterhead->email_en ?? 'E-mail: tds@sanly.tm' }}</textarea>
    </div>
    </div>
</div>

<x-user.blank.hr />

<x-user.blank.dowlet-date />