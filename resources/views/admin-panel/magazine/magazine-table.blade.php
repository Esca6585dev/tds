<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                <th>{{ __('Name') }}</th>
                <th>{{ __('Url') }}</th>
                <th>{{ __('Created time') }}</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($magazines as $magazine)
            <tr id="datatable">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $magazine->name }}</td>
                <td><a href="{{ asset($magazine->url) }}">{{ __('Download') }}</a></td>
                <td>
                    <span class="badge badge-secondary">{{ \Carbon::parse($magazine->created_at)->locale(config('app.faker_locales.' . app()->getlocale() ))->isoFormat('LLLL') }}</span>
                </td>
                <td>@include('admin-panel.magazine.magazine-action', [ $magazine ])</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <div>
            {{ $magazines->links('layouts.pagination') }}
        </div>
    </div>                                
</div>
