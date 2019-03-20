<!-- Booking Id Field -->
<div class="form-group col-sm-6 col-sm-6">
    {!! Form::label('Booking ID', 'Booking Id:') !!}
    @if($editing)
        <input type="text" readonly  id="staticEmail" value="{{$payment->booking->id}}" name="booking_id">
    @else
        <input type="text" readonly  id="staticEmail" value="{{$booking->id}}" name="booking_id">
    @endif
</div>
<hr>
<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Name:      ') !!}
    @if($editing)
        {!! $payment->booking->customer['first_name'] .' '. $payment->booking->customer['surname'] !!}
    @else
        {!! $booking->customer['first_name'] .' '. $booking->customer['surname'] !!}
    @endif
</div>
<hr>

<!-- Room Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('room_id', 'Room Number:      ') !!}
    @if($editing)         
        {!! $payment->booking->room['room_number'] .' '. $payment->booking->room->roomcategory['name'] !!}
    @else
        {!! $booking->room['room_number'] .' '. $booking->room->roomcategory['name'] !!}
    @endif
</div>
<hr>
<!-- Arrival Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('arrival_date', 'Arrival Date:') !!}
    @if($editing)
        {!! $payment->booking->arrival_date->format('D d, M, Y') !!}
    @else
        {!! $booking->arrival_date->format('D d, M, Y') !!}
    @endif
</div>
<hr>
<!-- Departure Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departure_date', 'Departure Date:') !!}
    @if($editing)
        {!! $payment->booking->departure_date->format('D d, M, Y') !!}
    @else
        {!! $booking->departure_date->format('D d, M, Y') !!}
    @endif
</div>
<!-- Cost Field -->
<?php
    if($editing){
       $diff= strtotime($payment->booking['departure_date']) - strtotime($payment->booking['arrival_date']); 
    }else{
        $diff= strtotime($booking->departure_date) - strtotime($booking->arrival_date);
    }
    $days=abs(round($diff / 86400));
    if($editing){
        $cost=$payment->booking->room->roomcategory['price']*$days;
    }else{
        $cost=$booking->room->roomcategory['price']*$days;
        $payment=0;
        $discount=0;
        foreach ($booking->payment as $pay) {
            $payment = $payment + $pay['amount_paid'];
            $discount= $discount + $pay['discount'];
        }
        $balance= $cost - ($payment + $discount);
    }
    
?>

<div class="form-group col-sm-6">
    {!! Form::label('cost', 'Cost:      ') !!}         
    {!!$cost !!}
</div>
@if(!$editing)
    <div class="form-group">
        {!! Form::label('balance', 'Balance:      ') !!}         
        {!!$balance !!}
    </div>
    <hr>
@endif
<!-- Amount Paid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount_paid', 'Amount Paid:') !!}
    {!! Form::number('amount_paid', null, ['class' => 'form-control']) !!}
</div>

<!-- Discount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('discount', 'Discount:') !!}
    {!! Form::number('discount', 0, ['class' => 'form-control']) !!}
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
