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
            <td>{!! $expenditure->description !!}</td>
            <td>{!! $expenditure->amount !!}</td>
            <td>{!! $expenditure->payment_method !!}</td>
            <td>{!! $expenditure->cheque_number !!}</td>
            <td>{!! $expenditure->expense_date->format('D d, M, Y') !!}</td>
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