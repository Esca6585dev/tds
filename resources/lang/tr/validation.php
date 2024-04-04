<?php

return [

    /*
    |--------------------------------------------------------------------------
    | tr Validation Language Lines
    |--------------------------------------------------------------------------
    */

    'accepted' => ':attribute kabul edilmelidir.',
    'active_url' => ':attribute geçerli bir URL değil.',
    'after' => ':attribute :date tarihinden sonraki bir tarih olmalıdır.',
    'after_or_equal' => ':attribute :date\'ten sonraki veya ona eşit bir tarih olmalıdır.',
    'alpha' => ':attribute yalnızca harf içermelidir.',
    'alpha_dash' => ':attribute yalnızca harf, rakam, tire ve alt çizgi içermelidir.',
    'alpha_num' => ':attribute yalnızca harf ve rakam içermelidir.',
    'array' => ':attribute bir dizi olmalıdır.',
    'before' => ':attribute :date tarihinden önceki bir tarih olmalıdır.',
    'before_or_equal' => ':attribute :date\'ten önce veya ona eşit bir tarih olmalıdır.',
    'between' => [
        'numeric' => ':attribute :min ve :max arasında olmalıdır.',
        'file' => ':attribute :min ve :max kilobayt arasında olmalıdır.',
        'string' => ':attribute :min ve :max karakterleri arasında olmalıdır.',
        'array' => ':attribute :min ve :max arasında öğe içermelidir.',
    ],
    'boolean' => ':attribute alanı doğru veya yanlış olmalıdır.',
    'confirmed' => ':özellik doğrulaması eşleşmedi',
    'current_password' => 'Şifre hatalı.',
    'date' => ':attribute geçerli bir tarih değil.',
    'date_equals' => ':attribute, :date\'e eşit bir tarih olmalıdır.',
    'date_format' => ':attribute, :format biçimiyle eşleşmiyor.',
    'different' => ':attribute ve :other farklı olmalıdır.',
    'digits' => ':attribute :digits rakam olmalıdır.',
    'digits_between' => ':attribute :min ve :max rakamları arasında olmalıdır.',
    'dimensions' => ':attribute geçersiz resim boyutlarına sahip.',
    'distinct' => ':attribute alanı yinelenen bir değere sahip.',
    'email' => ':attribute geçerli bir e-posta adresi olmalıdır.',
    'ends_with' => ':attribute aşağıdakilerden biriyle bitmelidir: :values.',
    'exists' => 'Seçilen :attribute geçersiz.',
    'file' => ':attribute bir dosya olmalıdır.',
    'filled' => ':attribute alanının bir değeri olmalıdır.',
    'gt' => [
        'numeric' => ':attribute, :value değerinden büyük olmalıdır.',
        'file' => ':attribute :value kilobayttan büyük olmalıdır.',
        'string' => ':attribute, :value karakterlerinden büyük olmalıdır.',
        'array' => ':attribute, :value öğesinden daha fazla öğeye sahip olmalıdır.',
    ],
    'gte' => [
        'numeric' => ':attribute, :value değerinden büyük veya ona eşit olmalıdır.',
        'file' => ':attribute :value kilobayttan büyük veya ona eşit olmalıdır.',
        'string' => ':attribute :value karakterlerinden büyük veya eşit olmalıdır.',
        'array' => ':attribute, :value öğelerine veya daha fazlasına sahip olmalıdır.',
    ],
    'image' => ':attribute bir resim olmalıdır.',
    'in' => 'Seçilen :attribute geçersiz.',
    'in_array' => ':attribute alanı :other\'da mevcut değil.',
    'integer' => ':attribute bir tamsayı olmalıdır.',
    'ip' => ':attribute geçerli bir IP adresi olmalıdır.',
    'ipv4' => ':attribute geçerli bir IPv4 adresi olmalıdır.',
    'ipv6' => ':attribute geçerli bir IPv6 adresi olmalıdır.',
    'json' => ':attribute geçerli bir JSON dizisi olmalıdır.',
    'lt' => [
        'numeric' => ':attribute :value değerinden küçük olmalıdır.',
        'file' => ':attribute :value kilobayttan az olmalıdır.',
        'string' => ':attribute :value karakterden küçük olmalıdır.',
        'array' => ':attribute, :value öğesinden daha az öğeye sahip olmalıdır.',
    ],
    'lte' => [
        'numeric' => ':attribute :value değerinden küçük veya ona eşit olmalıdır.',
        'file' => ':attribute :value kilobayttan küçük veya ona eşit olmalıdır.',
        'string' => ':attribute :value karakterlerinden küçük veya eşit olmalıdır.',
        'array' => ':attribute en fazla :value öğesi içermelidir.',
    ],
    'maks' => [
        'numeric' => ':attribute :max değerinden büyük olmamalıdır.',
        'file' => ':attribute :max kilobayttan büyük olmamalıdır.',
        'string' => ':attribute :max karakterden fazlasını içermemelidir',
        'array' => ':attribute\'ta :max öğesinden fazla öğe olmamalıdır.',
    ],
    'mimes' => ':attribute şu türde bir dosya olmalıdır: :values.',
    'mimetypes' => ':attribute şu türde bir dosya olmalıdır: :values.',
    'min' => [
        'numeric' => ':attribute en az :min olmalıdır.',
        'file' => ':attribute en az :min kilobayt olmalıdır.',
        'string' => ':attribute en az :min karakter olmalıdır.',
        'array' => ':attribute en az :min öğeye sahip olmalıdır.',
    ],
    'multiple_of' => ':attribute, :value\'nin katı olmalıdır.',
    'not_in' => 'Seçilen :attribute geçersiz.',
    'not_regex' => ':attribute formatı geçersiz.',
    'numeric' => ':attribute bir sayı olmalıdır.',
    'password' => 'Şifre hatalı.',
    'mevcut' => ':attribute alanı mevcut olmalıdır.',
    'regex' => ':attribute formatı geçersiz.',
    'required' => ':attribute alanı zorunludur.',
    'required_if' => ' :other :value olduğunda :attribute alanı gereklidir.',
    'required_unless' => ' :other :values ​​içinde olmadığı sürece :attribute alanı gereklidir.',
    'required_with' => ' :attribute alanı :values ​​mevcut olduğunda gereklidir.',
    'required_with_all' => ' :attribute alanı :values ​​mevcut olduğunda gereklidir.',
    'required_without' => ' :attribute alanı :values ​​mevcut olmadığında gereklidir.',
    'required_without_all' => ' :attribute alanı :values ​​​​hiçbiri mevcut olmadığında gereklidir.',
    'prohibited' => ':attribute alanı yasaktır.',
    'prohibited_if' => ' :other :value olduğunda :attribute alanı yasaktır.',
    'prohibited_unless' => ' :other :values ​​içinde olmadığı sürece :attribute alanı yasaktır.',
    'same' => ':attribute ve :other eşleşmelidir.',
    'size' => [
        'numeric' => ':attribute :size olmalıdır.',
        'file' => ':attribute :size kilobyte olmalıdır.',
        'string' => ':attribute :size karakterleri olmalıdır.',
        'array' => ':attribute :size öğeleri içermelidir.',
    ],
    'starts_with' => ':attribute aşağıdakilerden biriyle başlamalıdır: :values.',
    'string' => ':attribute bir dize olmalıdır.',
    'timezone' => ':attribute geçerli bir saat dilimi olmalıdır.',
    'unique' => ':öznitelik zaten alınmış.',
    'uploaded' => ':attribute yüklenemedi.',
    'url' => ':attribute geçerli bir URL olmalıdır.',
    'uuid' => ':attribute geçerli bir UUID olmalıdır.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'özel mesaj',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [
        'first_name' => 'Ad',
        'last_name' => 'Soyadı',
        'email' => 'E-posta',
        'password' => 'Şifre',
    ],

];
