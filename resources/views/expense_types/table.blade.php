<table class="table table-responsive" id="expenseTypes-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($expenseTypes as $expenseType)
        <tr>
            <td><a href="{!! route('expenseTypes.show', [$expenseType->id]) !!}">{!! $expenseType->name !!}</a></td>
            <td><a href="{!! route('expenseTypes.show', [$expenseType->id]) !!}">{!! $expenseType->description !!}</a></td>
            <td>
                {!! Form::open(['route' => ['expenseTypes.destroy', $expenseType->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('expenseTypes.show', [$expenseType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('expenseTypes.edit', [$expenseType->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>