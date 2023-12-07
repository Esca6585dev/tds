<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                @foreach (Config::get('languages') as $lang => $language)
                <th>{{ __('Name') }} ({{ $language['name'] }})</th>
                @endforeach
                <th>{{ __('Category') }} ID</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($texts as $text)
            <tr id="datatable">
                <td>{{ $loop->iteration }}</td>
                <td>{{ Str::limit($text->name_tm, 100) }}</td>
                <td>{{ Str::limit($text->name_en, 100) }}</td>
                <td>{{ Str::limit($text->name_ru, 100) }}</td>
                <td>
                    <a href="{{ route('category.show', [ app()->getlocale(), 'all', $text->parent ? $text->parent->id : $text->id ] ) }}" class="{{ $text->parent ? 'text-warning' : 'text-primary' }}">
                        {{ $text->parent ? $text->parent->{ 'name_' . app()->getlocale() } : __('Parent Category') }}
                    </a>
                </td>
                <td>@include('admin-panel.text.text-action', [ $text ])</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <div>
            {{ $texts->links('layouts.pagination') }}
        </div>
    </div>                                
</div>