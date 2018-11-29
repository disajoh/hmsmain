
<!-- Role Id Field -->
<div class="form-group">
    {!! Form::label('role_id', 'Staff Role:') !!}
    <p>{!! $user->role['name'] !!}</p>
</div>

<!-- First Name Field -->
<div class="form-group">
    {!! Form::label('first_name', 'First Name:') !!}
    <p>{!! $user->first_name !!}</p>
</div>

<!-- Surname Field -->
<div class="form-group">
    {!! Form::label('surname', 'Surname:') !!}
    <p>{!! $user->surname !!}</p>
</div>

<!-- Other Name Field -->
<div class="form-group">
    {!! Form::label('other_name', 'Other Name:') !!}
    <p>{!! $user->other_name !!}</p>
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    <p>{!! $user->phone !!}</p>
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    <p>{!! $user->email !!}</p>
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    <p>{!! $user->address !!}</p>
</div>


<!-- Address Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Registered:') !!}
    <p>{!! $user->created_at->format('D d, M, Y') !!}</p>
</div>

