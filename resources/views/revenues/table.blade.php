<table class="table table-responsive" id="revenues-table">
    <thead>
        <tr>
            <th>Revenue Source</th>
        <th>User Id</th>
        <th>Amount</th>
        <th>Transaction Date</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($revenues as $revenue)
        <tr>                    
            <td><a href="{!! route('revenues.show', [$revenue->id]) !!}">{!! $revenue->other_revenue_source['name'] !!}</a></td>
            <td><a href="{!! route('revenues.show', [$revenue->id]) !!}">{!! $revenue->user['name'] !!}</a></td>
            <td><a href="{!! route('revenues.show', [$revenue->id]) !!}">{!! $revenue->amount !!}</a></td>
            <td><a href="{!! route('revenues.show', [$revenue->id]) !!}">{!! $revenue->transaction_date !!}</a></td>
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