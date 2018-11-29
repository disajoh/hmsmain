<!-- First Name Field -->
<div class="panel-heading">
    <h3>Customer Details</h3>
</div>
<div class="panel-body">
    <div class="form-group col-sm-6">
        {!! Form::label('first_name', 'First Name:') !!}
        {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Surname Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('surname', 'Surname:') !!}
        {!! Form::text('surname', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Other Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('other_name', 'Other Name:') !!}
        {!! Form::text('other_name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Phone Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::number('phone', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Email Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Occupation Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('occupation', 'Occupation:') !!}
        {!! Form::text('occupation', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Nationality Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('nationality', 'Nationality:') !!}
        {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Address Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('address', 'Address:') !!}
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Passport Number Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('passport_number', 'Passport Number:') !!}
        {!! Form::text('passport_number', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Date Issued Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('date_issued', 'Date Issued:') !!}
        {!! Form::date('date_issued', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="panel-heading">
    <h3>Booking Details</h3>
</div>
<div class="panel-body">
    
    <!-- Room Id Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('room_id', 'Room Id:') !!}
        {!! Form::number('room_id', null, ['class' => 'form-control']) !!}
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
</div>