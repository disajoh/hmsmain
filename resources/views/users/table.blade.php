<table class="table table-responsive" id="users-table">
    <thead>
        <tr>
         <th>Name</th>   
        <!-- <th>First Name</th>
        <th>Surname</th>
        <th>Other Name</th> -->
        <th>Phone</th>
        <th>Email</th>
        <th>Role Id</th>
        
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($users as $user)
        <tr>
            

            <td>
                <a href="{!! route('users.show', [$user->id]) !!}">
                    {{$user->first_name ." ". $user->surname}} 
                </a>
            </td>
            
            <!-- <td><a href="{!! route('users.show', [$user->id]) !!}">{!! $user->first_name !!}</a></td>
            <td><a href="{!! route('users.show', [$user->id]) !!}">{!! $user->surname !!}</a></td>
            <td><a href="{!! route('users.show', [$user->id]) !!}">{!! $user->other_name !!}</a></td> -->
            <td><a href="{!! route('users.show', [$user->id]) !!}">{!! $user->phone !!}</a></td>
            <td><a href="{!! route('users.show', [$user->id]) !!}">{!! $user->email !!}</a></td>
            <td><a href="{!! route('users.show', [$user->id]) !!}">{!! $user->role_id !!}</a></td>
            
            
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