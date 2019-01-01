<table class="table table-responsive" id="bookingRefunds-table">
    <thead>
        <tr>
            <th>Booking Id</th>
        <th>Amount Refunded</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bookingRefunds as $bookingRefund)
        <tr>
            <td>{!! $bookingRefund->booking_id !!}</td>
            <td>{!! $bookingRefund->amount_refunded !!}</td>
            <td>
                {!! Form::open(['route' => ['bookingRefunds.destroy', $bookingRefund->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('bookingRefunds.show', [$bookingRefund->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('bookingRefunds.edit', [$bookingRefund->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>