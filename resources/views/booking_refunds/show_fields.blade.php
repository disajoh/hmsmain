<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $bookingRefund->id !!}</p>
</div>

<!-- Booking Id Field -->
<div class="form-group">
    {!! Form::label('booking_id', 'Booking Id:') !!}
    <p>{!! $bookingRefund->booking_id !!}</p>
</div>

<!-- Amount Refunded Field -->
<div class="form-group">
    {!! Form::label('amount_refunded', 'Amount Refunded:') !!}
    <p>{!! $bookingRefund->amount_refunded !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $bookingRefund->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $bookingRefund->updated_at !!}</p>
</div>

