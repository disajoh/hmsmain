

<!-- Reciept Number Field -->
<div class="form-group">
    {!! Form::label('recipt_number', 'Reciept Number:') !!}
    {!! $payment->id !!}
</div>
<hr>
<!-- Customer Id Field -->
<div class="form-group">
    {!! Form::label('customer_id', 'Customer Name:      ') !!}
    {!! $payment->booking->customer['first_name'] .' '. $payment->booking->customer['surname'] !!}
</div>
<!-- Room Id Field -->
<div class="form-group">
    {!! Form::label('room_id', 'Room Number:      ') !!}         
    {!! $payment->booking->room['room_number'] !!}
</div>
<!-- Arrival Date Field -->
<div class="form-group">
    {!! Form::label('arrival_date', 'Arrival Date:') !!}
    {!! $payment->booking->arrival_date->format('D d, M, Y') !!}
</div>
<!-- Departure Date Field -->
<div class="form-group">
    {!! Form::label('departure_date', 'Departure Date:') !!}
    {!! $payment->booking->departure_date->format('D d, M, Y') !!}
</div>
<hr>

<?php
                $diff= strtotime($payment->booking['departure_date']) - strtotime($payment->booking['arrival_date']);
                $days=abs(round($diff / 86400));
                $price= $payment->booking->room->roomcategory['price']*$days;
            ?>
<!-- Customer Field -->
<!-- <div class="form-group">
    {!! Form::label('cost', 'Cost:') !!}
    {!! $price !!}
</div> -->
<!-- Cost Field -->
<div class="form-group">
    {!! Form::label('cost', 'Cost:') !!}
    {!! $price !!}
</div>
<!-- Amount Paid Field -->
<div class="form-group">
    {!! Form::label('amount_paid', 'Amount Paid:') !!}
    {!! $payment->amount_paid !!}
</div>

<!-- Discount Field -->
<div class="form-group">
    {!! Form::label('discount', 'Discount:') !!}
    {!! $payment->discount !!}
</div>

<!-- Date Received Field -->
<div class="form-group">
    {!! Form::label('date_received', 'Date Received:') !!}
    {!! $payment->date_received->format('D d, M, Y') !!}
</div>



