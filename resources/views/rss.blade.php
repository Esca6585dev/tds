@php
    echo '<?xml version="1.0" encoding="UTF-8"?>';
@endphp

<configurations>
    @foreach ($news as $key => $row)
        <configuration>
            <id>{{ $row->id }}</id>

            <title>{{ $row->{ 'title_' . app()->getlocale() } }}</title>
            
            <url>{{ 'https://tds.gov.tm/' . app()->getlocale() . '/news/' . $row->id . '-' . Str::slug($row->{ 'name_' . app()->getlocale() })  }}</url>

            <image>{{ $row->image }}</image>

            <datecreated>{{ $row->created_at }}</datecreated>

            <dateupdated>{{ $row->updated_at }}</dateupdated>
        
        </configuration>
    @endforeach
</configurations>