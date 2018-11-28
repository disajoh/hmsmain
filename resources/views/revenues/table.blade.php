<table class="table table-responsive" id="revenues-table">
    <thead>
        <tr>
            <th>Other Revenue Source Id</th>
        <th>User Id</th>
        <th>Amount</th>
        <th>Transaction Date</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($revenues as $revenue)
        <tr>
            <td>{!! $revenue->other_revenue_source_id !!}</td>
            <td>{!! $revenue->user_id !!}</td>
            <td>{!! $revenue->amount !!}</td>
            <td>{!! $revenue->transaction_date !!}</td>
            <td>
                {!! Form::open(['route' => ['revenues.destroy', $revenue->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('revenues.show', [$revenue->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('revenues.edit', [$revenue->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>