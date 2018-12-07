<table class="table table-responsive" id="bookings-table">
    <thead>
        <tr>
            <th>Staff</th>
        <th>Room Number</th>
        <th>Customer</th>
        <th>Arrival Date</th>
        <th>Departure Date</th>
        <!-- <th>Purpose</th>
        <th>Next Destination</th>
        <th>Transport Means</th>
        <th>Where From</th>
        <th>Vehicle Number</th> -->
        <th>Cost</th>
        <th>Amount Paid</th>
        <th>Discount</th>
        <th>Status</th>
        <!-- <th>Discount</th> -->
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        
    @foreach($bookings as $booking)
        <?php
            $diff= date_diff($booking->departure_date, $booking->arrival_date);
            $days=intval($diff->format("%d"));

            $payment=0;
            $discount=0;
            foreach ($booking->payment as $pay) {
                $payment = $payment + $pay['amount_paid'];
                $discount= $discount + $pay['discount'];
            }
            $cost=$booking->room->roomcategory['price']*$days;
            $balance= $cost - ($payment + $discount);
        ?>
        <tr>
            <td><a href="{!! route('bookings.show', [$booking->id]) !!}">{!! $booking->user['first_name'] !!}</a></td>
            <td><a href="{!! route('bookings.show', [$booking->id]) !!}">{!! $booking->room['room_number'] !!}</a></td>
            <td><a href="{!! route('bookings.show', [$booking->id]) !!}">
                {!! $booking->customer['first_name'] .' '.$booking->customer['surname']!!}</a></td>
            <td><a href="{!! route('bookings.show', [$booking->id]) !!}">{!! $booking->arrival_date->format('D d, M, Y') !!}</a></td>
            <td><a href="{!! route('bookings.show', [$booking->id]) !!}">{!! $booking->departure_date->format('D d, M, Y') !!}</a></td>
            <td><a href="{!! route('bookings.show', [$booking->id]) !!}">{!! $cost !!}</a></td>

            <td><a href="{!! route('bookings.show', [$booking->id]) !!}">{!!$payment !!}</a></td>
            <td><a href="{!! route('bookings.show', [$booking->id]) !!}">{!!$discount !!}</a></td>
            
            <td> <a href="{!! route('bookings.show', [$booking->id]) !!}">
                @if($booking->active == 1)
                
                    Active
                @else

                    Checked Out

                @endif
                </a>
            </td>
            <!-- <td>{!! $booking->discount !!}</td> -->
            <td>
                {!! Form::open(['route' => ['bookings.destroy', $booking->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if($balance > 0)
                        <a href="{!! route('pay', [$booking->id]) !!}" class='btn btn-default btn-xs'>Pay</a>
                    @endif
                    <a href="{!! route('bookings.show', [$booking->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>

                    <!-- <a href="{!! route('bookings.edit', [$booking->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
 -->
                    @if($booking->active == 1)
                        {!! Form::button('<i class="glyphicon glyphicon-eject"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @endif
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>