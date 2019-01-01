<!-- Booking Id Field -->
<div class="form-group col-sm-6 col-sm-6">
    {!! Form::label('Booking ID', 'Id:') !!}

    <input type="text" readonly  id="staticEmail" value="{{$booking->id}}" name="booking_id">
</div>
<hr>
<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Name:      ') !!}
    {!! $booking->customer['first_name'] .' '. $booking->customer['surname'] !!}
</div>
<hr>

<!-- Room Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('room_id', 'Room Number:      ') !!}         
    {!! $booking->room['room_number'] .' '. $booking->room->roomcategory['name'] !!}
</div>
<hr>
<!-- Arrival Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('arrival_date', 'Arrival Date:') !!}
    {!! $booking->arrival_date->format('D d, M, Y') !!}
</div>
<hr>
<!-- Departure Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departure_date', 'Departure Date:') !!}
    {!! $booking->departure_date->format('D d, M, Y') !!}
</div>
<!-- Cost Field -->
<?php
    $diff= date_diff($booking->departure_date, $booking->arrival_date);
    $days=intval($diff->format("%d"));
    $cost=$booking->room->roomcategory['price']*$days;
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
    $balance= $cost - ($payment + $discount) + $refund;
?>

<div class="form-group col-sm-6">
    {!! Form::label('cost', 'Cost:      ') !!}         
    {!!$cost !!}
</div>
<div class="form-group">
    {!! Form::label('balance', 'Balance:      ') !!}         
    {!!$balance !!}
</div>
<hr>

<!-- Amount Refunded Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount_refunded', 'Amount Refunded:') !!}
    {!! Form::number('amount_refunded', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('bookings.index') !!}" class="btn btn-default">Cancel</a>
</div>
