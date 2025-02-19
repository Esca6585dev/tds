<div class="section__container__table" id="datatable">
    @if(count($magazines))
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Download') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($magazines as $magazine)
                    <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $magazine->name }}</td>
                    <td><a href="{{ asset($magazine->url) }}" target="_blank" >{{ __('Download') }}</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="no-data">
        {{ __('No Data') }}
    </div>
    @endif
</div>