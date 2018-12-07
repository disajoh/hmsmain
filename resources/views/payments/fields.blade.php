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
    foreach ($booking->payment as $pay) {
        $payment = $payment + $pay['amount_paid'];
        $discount= $discount + $pay['discount'];
    }
    $balance= $cost - ($payment + $discount);
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

<!-- Amount Paid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount_paid', 'Amount Paid:') !!}
    {!! Form::number('amount_paid', null, ['class' => 'form-control']) !!}
</div>

<!-- Discount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discount', 'Discount:') !!}
    {!! Form::number('discount', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Received Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_received', 'Date Received:') !!}
    {!! Form::date('date_received', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('payments.index') !!}" class="btn btn-default">Cancel</a>
</div>
