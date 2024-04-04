<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                <th>TDS №</th>
                @foreach (Config::get('languages') as $lang => $language)
                <th>{{ __('Name') }} ({{ $language['name'] }})</th>
                @endforeach
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($standarts as $standart)
            <tr id="datatable">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $standart->number }}</td>
                @foreach (Config::get('languages') as $lang => $language)
                <td>{{ $standart->{ 'name_' . $lang } }}</td>
                @endforeach
                <td>@include('admin-panel.standart.standart-action', [ $standart ])</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <div>
            {{ $standarts->links('layouts.pagination') }}
        </div>
    </div>
</div>
