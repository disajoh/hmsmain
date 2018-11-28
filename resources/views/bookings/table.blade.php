<table class="table table-responsive" id="bookings-table">
    <thead>
        <tr>
            <th>User Id</th>
        <th>Room Id</th>
        <th>Customer Id</th>
        <th>Arrival Date</th>
        <th>Departure Date</th>
        <th>Purpose</th>
        <th>Next Destination</th>
        <th>Transport Means</th>
        <th>Where From</th>
        <th>Vehicle Number</th>
        <th>Reserved By</th>
        <th>Amount Paid</th>
        <th>Discount</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bookings as $booking)
        <tr>
            <td>{!! $booking->user_id !!}</td>
            <td>{!! $booking->room_id !!}</td>
            <td>{!! $booking->customer_id !!}</td>
            <td>{!! $booking->arrival_date !!}</td>
            <td>{!! $booking->departure_date !!}</td>
            <td>{!! $booking->purpose !!}</td>
            <td>{!! $booking->next_destination !!}</td>
            <td>{!! $booking->transport_means !!}</td>
            <td>{!! $booking->where_from !!}</td>
            <td>{!! $booking->vehicle_number !!}</td>
            <td>{!! $booking->reserved_by !!}</td>
            <td>{!! $booking->amount_paid !!}</td>
            <td>{!! $booking->discount !!}</td>
            <td>
                {!! Form::open(['route' => ['bookings.destroy', $booking->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('bookings.show', [$booking->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('bookings.edit', [$booking->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>