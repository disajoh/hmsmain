<table class="table table-responsive" id="bookings-table">
    <thead>
        <tr>
            <th>Staff</th>
            <th>Room Number</th>
            <th>Customer</th>
            <th>Arrival Date</th>
            <th>Departure Date</th>
            <th>Cost</th>
            <th>Amount Paid</th>
            <th>Discount</th>
            <th>Status</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
        
    @foreach($bookings as $booking)
        <?php
            
            // Calulating the difference in timestamps 
            $diff = strtotime($booking->departure_date) - strtotime($booking->arrival_date); 
                      
            // 1 day = 24 hours 
            // 24 * 60 * 60 = 86400 seconds    
            $days= abs(round($diff / 86400));

            $payment=0;
            $discount=0;
            $refund=0;
            foreach ($booking->payment as $pay) {
                $payment = $payment + $pay['amount_paid'];
                $discount= $discount + $pay['discount'];
            }
            foreach ($booking->booking_refund as $ref){
                $refund = $refund + $ref{'amount_refunded'};
            }
            $cat=$booking->room['roomcategory'];
            $cost=$cat['price']*$days;
            $balance= $cost - ($payment + $discount) + $refund;
            $payment = $payment - $refund;
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
            <td>
                {!! Form::open(['route' => ['bookings.destroy', $booking->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    @if($balance > 0)
                        <a href="{!! route('pay', [$booking->id]) !!}" class='btn btn-default btn-xs'>Pay</a>
                    @endif
                    @if($balance < 0)
                        <a href="{!! route('refund', [$booking->id]) !!}" class='btn btn-default btn-xs'>Refund</a>
                    @endif
                    <a href="{!! route('bookings.show', [$booking->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>

                    <a href="{!! route('bookings.edit', [$booking->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    
                    @if($booking->active == 1)
                        {!! Form::button('<i class="glyphicon glyphicon-eject"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    @endif
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    <div>
        {{ $bookings->links() }}
    </div>
    
    </tbody>
</table>