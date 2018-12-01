<!-- Customer Id Field -->
<div class="form-group col-sm-6">
    <label for="sel1">Customer Name:</label>
    <select class="form-control" data-live-search="true" name="customer_id">
        @foreach($customers as $customer)
            <option value="{{ $customer['id'] }}"  data-tokens="{{ $customer['first_name'] }}">{{ $customer['first_name'] }} {{ $customer['surname'] }}</option>
        @endforeach
    </select>
</div>

<!-- Room Id Field -->
<div class="form-group col-sm-6">
    <label for="sel1">Rooms:</label>
    <select class="form-control" id="sel1" name="room_id">
        @foreach($rooms as $room)
            @if($room['available'] == true)
                <option value="{{ $room['id'] }}">{{ $room['room_number'] }} | {{ $room->roomcategory['name'] }}</option>
            @endif
        @endforeach
    </select>
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
