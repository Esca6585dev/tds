<div id="datatable">
    <table class="table table-separate table-head-custom table-checkable">
        <thead>
            <tr>
                <th>ID</th>
                <th>{{ __('First Name') }}</th>
                <th>{{ __('Last Name') }}</th>
                <th>{{ __('Email') }}</th>
                <th>{{ __('Phone number') }}</th>
                <th>{{ __('Address') }}</th>
                <th>{{ __('Are you Businessman?') }}</th>
                <th>{{ __('Company name') }}</th>
                <th>{{ __('Active') }}</th>
                <th>{{ __('Actions') }}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr id="datatable">
                <td>{{ $loop->iteration }}</td>
                <td>{{ $user->first_name }}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="tel:+993{{ $user->phone_number }}">
                        <span>+993</span> {{ $user->phone_number }}
                    </a>
                </td>
                <td>{{ $user->address }}</td>
                <td>
                    @if($user->roles->pluck("name")->first() == 'raýat')
                    <span class="badge badge-warning">{{ $user->roles->pluck("name")->first() }}</span>
                    @elseif($user->roles->pluck("name")->first() == 'telekeçi')
                    <span class="badge badge-primary">{{ $user->roles->pluck("name")->first() }}</span>
                    @elseif($user->roles->pluck("name")->first() == 'döwlet-edara')
                    <span class="badge badge-success">{{ $user->roles->pluck("name")->first() }}</span>
                    @endif
                </td>
                <td>{{ $user->company_name }}</td>
                <td>
                    @if($user->deleted_at)
                    <span class="badge badge-danger">{{ __('Inactive') }}</span>
                    @else
                    <span class="badge badge-success">{{ __('Active') }}</span>
                    @endif
                </td>
                <td>@include('admin-panel.user.user-action', [ $user ])</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <div>
            {{ $users->links('layouts.pagination') }}
        </div>
    </div>                                
</div>