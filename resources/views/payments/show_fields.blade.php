

<!-- Booking Id Field -->
<div class="form-group">
    {!! Form::label('booking_id', 'Booking Id:') !!}
    {!! $payment->booking->customer['name'] !!}
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



