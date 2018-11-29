<table class="table table-responsive" id="roomCategories-table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Price</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($roomCategories as $roomCategory)
        <tr>
            <td>{!! $roomCategory->name !!}</td>
            <td>{!! $roomCategory->price !!}</td>
            <td>
                {!! Form::open(['route' => ['roomCategories.destroy', $roomCategory->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('roomCategories.show', [$roomCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('roomCategories.edit', [$roomCategory->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>