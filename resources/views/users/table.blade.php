<table class="table table-responsive" id="users-table">
    <thead>
        <tr>
            <th>Role Id</th>
        <th>First Name</th>
        <th>Surname</th>
        <th>Other Name</th>
        <th>Phone</th>
        <th>Email</th>
        <th>Address</th>
        <th>Email Verified At</th>
        <th>Password</th>
        <th>Remember Token</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            <td>{!! $user->role_id !!}</td>
            <td>{!! $user->first_name !!}</td>
            <td>{!! $user->surname !!}</td>
            <td>{!! $user->other_name !!}</td>
            <td>{!! $user->phone !!}</td>
            <td>{!! $user->email !!}</td>
            <td>{!! $user->address !!}</td>
            <td>{!! $user->email_verified_at !!}</td>
            <td>{!! $user->password !!}</td>
            <td>{!! $user->remember_token !!}</td>
            <td>
                {!! Form::open(['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('users.show', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('users.edit', [$user->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>