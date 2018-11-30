<table class="table table-responsive" id="expenditures-table">
    <thead>
        <tr>
        <th>Description</th>
        <th>Amount</th>
        <th>Payment Method</th>
        <th>Cheque Number</th>
        <th>Expense Date</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($expenditures as $expenditure)
        <tr>
            <td><a href="{!! route('expenditures.show', [$expenditure->id]) !!}">{!! $expenditure->description !!}</a></td>
            <td><a href="{!! route('expenditures.show', [$expenditure->id]) !!}">{!! $expenditure->amount !!}</a></td>
            <td><a href="{!! route('expenditures.show', [$expenditure->id]) !!}">{!! $expenditure->payment_method !!}</a></td>
            <td><a href="{!! route('expenditures.show', [$expenditure->id]) !!}">{!! $expenditure->cheque_number !!}</a></td>
            <td><a href="{!! route('expenditures.show', [$expenditure->id]) !!}">{!! $expenditure->expense_date->format('D d, M, Y') !!}</a></td>

            <td>
                {!! Form::open(['route' => ['expenditures.destroy', $expenditure->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('expenditures.show', [$expenditure->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('expenditures.edit', [$expenditure->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>