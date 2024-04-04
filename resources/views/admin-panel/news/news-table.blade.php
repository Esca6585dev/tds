<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                @foreach (Config::get('languages') as $lang => $language)
                <th>{{ __('Name') }} ({{ $language['name'] }})</th>
                @endforeach
                <th>{{ __('Category') }} ID</th>
                <th>{{ __('Seen') }}</th>
                <th>{{ __('Created time') }}</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($news as $row)
            <tr id="datatable">
                <td>{{ $loop->iteration }}</td>
                @foreach (Config::get('languages') as $lang => $language)
                <td>{{ $row->{ 'name_' . $lang } }}</td>
                @endforeach
                <td>
                    @if($row->category_id == 1)
                    <span class="badge badge-success">{{ __('News') }}</span>
                    @elseif($row->category_id == 2)
                    <span class="badge badge-primary">{{ __('Work in progress') }}</span>
                    @elseif($row->category_id == 3)
                    <span class="badge badge-warning">{{ __('Web-site') }}</span>
                    @endif
                </td>
                <td>{{ $row->view }}</td>
                <td>
                    <span class="badge badge-secondary">{{ \Carbon::parse($row->created_at)->locale(config('app.faker_locales.' . app()->getlocale() ))->isoFormat('LLLL') }}</span>
                </td>
                <td>@include('admin-panel.news.news-action', [ $row ])</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <div>
            {{ $news->links('layouts.pagination') }}
        </div>
    </div>                                
</div>