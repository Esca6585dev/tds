<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                @foreach (Config::get('languages') as $lang => $language)
                <th>{{ __('Name') }} ({{ $language['name'] }})</th>
                @endforeach
                @foreach (Config::get('languages') as $lang => $language)
                <th>{{ __('Description') }} ({{ $language['name'] }})</th>
                @endforeach
                <th>{{ __('Route') }}</th>
                <th>{{ __('Section') }} ID</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sections as $section)
            <tr id="datatable">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $section->name_tm }}</td>
                <td>{{ $section->name_en }}</td>
                <td>{{ $section->name_ru }}</td>
                <td>{{ Str::limit($section->desc_tm) }}</td>
                <td>{{ Str::limit($section->desc_en) }}</td>
                <td>{{ Str::limit($section->desc_ru) }}</td>
                <td>{{ $section->route }}</td>
                <td>
                    <a href="{{ route(Request::segment(4) . '.show', [ app()->getlocale(), $sectionType, $section->parent ? $section->parent->id : $section->id ] ) }}" class="{{ $section->parent ? 'text-warning' : 'text-primary' }}">
                        {{ $section->parent ? $section->parent->{ 'name_' . app()->getlocale() } : __('Parent Section') }}
                    </a>
                </td>
                <td>@include('admin-panel.section.section-action', [ $sectionType, $section ])</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <div>
            {{ $sections->links('layouts.pagination') }}
        </div>
    </div>                                
</div>
