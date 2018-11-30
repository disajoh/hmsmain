<!-- Id Field -->
<!-- <div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $booking->id !!}
</div>
 -->

<!-- Room Id Field -->
<div class="form-group">
    {!! Form::label('room_id', 'Room Number:      ') !!}         
    {!! $booking->room['room_number'] !!}
</div>
<hr>



<!-- Customer Id Field -->
<div class="form-group">
    {!! Form::label('customer_id', 'Customer Name:      ') !!}
    {!! $booking->customer['first_name'] .' '. $booking->customer['surname'] !!}
</div>
<hr>

<!-- Arrival Date Field -->
<div class="form-group">
    {!! Form::label('arrival_date', 'Arrival Date:') !!}
    {!! $booking->arrival_date->format('D d, M, Y') !!}
</div>
<hr>
<!-- Departure Date Field -->
<div class="form-group">
    {!! Form::label('departure_date', 'Departure Date:') !!}
    {!! $booking->departure_date->format('D d, M, Y') !!}
</div>
<hr>
<!-- Purpose Field -->
<div class="form-group">
    {!! Form::label('purpose', 'Purpose:') !!}
    {!! $booking->purpose !!}
</div>
<hr>
<!-- Next Destination Field -->
<div class="form-group">
    {!! Form::label('next_destination', 'Next Destination:') !!}
    {!! $booking->next_destination !!}
</div>
<hr>
<!-- Transport Means Field -->
<div class="form-group">
    {!! Form::label('transport_means', 'Transport Means:') !!}
    {!! $booking->transport_means !!}
</div>
<hr>
<!-- Where From Field -->
<div class="form-group">
    {!! Form::label('where_from', 'Where From:') !!}
    {!! $booking->where_from !!}
</div>
<hr>
<!-- Vehicle Number Field -->
<div class="form-group">
    {!! Form::label('vehicle_number', 'Vehicle Number:') !!}
    {!! $booking->vehicle_number !!}
</div>
<hr>
<!-- Reserved By Field -->
<div class="form-group">
    {!! Form::label('reserved_by', 'Reserved By:') !!}
    {!! $booking->reserved_by !!}
</div>
<hr>
<!-- Amount Paid Field -->
<div class="form-group">
    {!! Form::label('amount_paid', 'Amount Paid:') !!}
    {!! $booking->amount_paid !!}
</div>
<hr>
@if($booking->discount > 0)
    <!-- Discount Field -->
    <div class="form-group">
        {!! Form::label('discount', 'Discount:') !!}
        {!! $booking->discount !!}
    </div>
    <hr>
@endif

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Booked:') !!}
    {!! $booking->created_at->format('D d, M, Y') !!}
</div>
<hr>
<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated:') !!}
    {!! $booking->updated_at->format('D d, M, Y') !!}
</div>
<hr>
<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Booking Staff:') !!}
    {!! $booking->user['first_name'] !!}
</div>
<hr>