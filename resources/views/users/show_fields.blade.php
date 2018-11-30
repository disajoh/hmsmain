
<!-- Role Id Field -->
<div class="form-group">
    {!! Form::label('role_id', 'Staff Role:') !!}
    {!! $user->role['name'] !!}
</div>

<!-- First Name Field -->
<div class="form-group">
    {!! Form::label('first_name', 'First Name:') !!}
    {!! $user->first_name !!}
</div>

<!-- Surname Field -->
<div class="form-group">
    {!! Form::label('surname', 'Surname:') !!}
    {!! $user->surname !!}
</div>

<!-- Other Name Field -->
<div class="form-group">
    {!! Form::label('other_name', 'Other Name:') !!}
    {!! $user->other_name !!}
</div>

<!-- Phone Field -->
<div class="form-group">
    {!! Form::label('phone', 'Phone:') !!}
    {!! $user->phone !!}
</div>

<!-- Email Field -->
<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! $user->email !!}
</div>

<!-- Address Field -->
<div class="form-group">
    {!! Form::label('address', 'Address:') !!}
    {!! $user->address !!}
</div>


<!-- Address Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Registered:') !!}
    {!! $user->created_at->format('D d, M, Y') !!}
</div>

