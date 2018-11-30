<table class="table table-responsive" id="bookings-table">
    <thead>
        <tr>
            <th>Staff</th>
        <th>Room Number</th>
        <th>Customer Id</th>
        <th>Arrival Date</th>
        <th>Departure Date</th>
        <!-- <th>Purpose</th>
        <th>Next Destination</th>
        <th>Transport Means</th>
        <th>Where From</th>
        <th>Vehicle Number</th> -->
        <th>Reserved By</th>
        <th>Amount Paid</th>
        <!-- <th>Discount</th> -->
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($bookings as $booking)
        <tr>
            <td><a href="{!! route('bookings.show', [$booking->id]) !!}">{!! $booking->user['first_name'] !!}</a></td>
            <td><a href="{!! route('bookings.show', [$booking->id]) !!}">{!! $booking->room['room_number'] !!}</a></td>
            <td><a href="{!! route('bookings.show', [$booking->id]) !!}">
                {!! $booking->customer['first_name'] .' '.$booking->customer['surname']!!}</a></td>
            <td><a href="{!! route('bookings.show', [$booking->id]) !!}">{!! $booking->arrival_date->format('D d, M, Y') !!}</a></td>
            <td><a href="{!! route('bookings.show', [$booking->id]) !!}">{!! $booking->departure_date->format('D d, M, Y') !!}</a></td>
            <td><a href="{!! route('bookings.show', [$booking->id]) !!}">{!! $booking->reserved_by !!}</a></td>
            <td><a href="{!! route('bookings.show', [$booking->id]) !!}">{!! $booking->amount_paid !!}</a></td>
            <!-- <td>{!! $booking->discount !!}</td> -->
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