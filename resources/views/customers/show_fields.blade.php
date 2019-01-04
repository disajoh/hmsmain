<!-- Id Field -->
<!-- <div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $customer->id !!}
</div> -->

<!-- First Name Field -->
<div class="form-group">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! $customer->first_name !!}
</div>

<!-- Surname Field -->
<div class="form-group">
    {!! Form::label('surname', 'Surname:') !!}
    {!! $customer->surname !!}
</div>

<!-- Other Name Field -->
<div class="form-group">
    {!! Form::label('other_name', 'Other Name:') !!}
    {!! $customer->other_name !!}
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    {!! $customer->phone !!}
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! $customer->email !!}
</div>

<!-- Occupation Field -->
<div class="form-group">
    {!! Form::label('occupation', 'Occupation:') !!}
    {!! $customer->occupation !!}
</div>

<!-- Nationality Field -->
<div class="form-group">
    {!! Form::label('nationality', 'Nationality:') !!}
    {!! $customer->nationality !!}
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    {!! $customer->address !!}
</div>

<!-- Passport Number Field -->
<div class="form-group">
    {!! Form::label('passport_number', 'Passport Number:') !!}
    {!! $customer->passport_number !!}
</div>

<!-- Date Issued Field -->
@if(!is_null($customer->date_issued))
    <div class="form-group">
        {!! Form::label('date_issued', 'Date Issued Passport:') !!}
        {!! $customer->date_issued->format('D d, M, Y') !!}
    </div>
@endif

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Registered:') !!}
    {!! $customer->created_at->format('D d, M, Y') !!}
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated:') !!}
    {!! $customer->updated_at->format('D d, M, Y') !!}
</div>

