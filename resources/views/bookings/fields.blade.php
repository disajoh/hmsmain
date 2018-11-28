<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Room Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('room_id', 'Room Id:') !!}
    {!! Form::number('room_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('customer_id', 'Customer Id:') !!}
    {!! Form::number('customer_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Arrival Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('arrival_date', 'Arrival Date:') !!}
    {!! Form::date('arrival_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Departure Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('departure_date', 'Departure Date:') !!}
    {!! Form::date('departure_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Purpose Field -->
<div class="form-group col-sm-6">
    {!! Form::label('purpose', 'Purpose:') !!}
    {!! Form::text('purpose', null, ['class' => 'form-control']) !!}
</div>

<!-- Next Destination Field -->
<div class="form-group col-sm-6">
    {!! Form::label('next_destination', 'Next Destination:') !!}
    {!! Form::text('next_destination', null, ['class' => 'form-control']) !!}
</div>

<!-- Transport Means Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transport_means', 'Transport Means:') !!}
    {!! Form::text('transport_means', null, ['class' => 'form-control']) !!}
</div>

<!-- Where From Field -->
<div class="form-group col-sm-6">
    {!! Form::label('where_from', 'Where From:') !!}
    {!! Form::text('where_from', null, ['class' => 'form-control']) !!}
</div>

<!-- Vehicle Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vehicle_number', 'Vehicle Number:') !!}
    {!! Form::text('vehicle_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Reserved By Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reserved_by', 'Reserved By:') !!}
    {!! Form::text('reserved_by', null, ['class' => 'form-control']) !!}
</div>

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

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('bookings.index') !!}" class="btn btn-default">Cancel</a>
</div>
