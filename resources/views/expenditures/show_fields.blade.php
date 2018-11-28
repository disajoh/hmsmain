<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $expenditure->id !!}</p>
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'User Id:') !!}
    <p>{!! $expenditure->user_id !!}</p>
</div>

<!-- Expence Type Id Field -->
<div class="form-group">
    {!! Form::label('expence_type_id', 'Expence Type Id:') !!}
    <p>{!! $expenditure->expence_type_id !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $expenditure->description !!}</p>
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    <p>{!! $expenditure->amount !!}</p>
</div>

<!-- Payment Method Field -->
<div class="form-group">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    <p>{!! $expenditure->payment_method !!}</p>
</div>

<!-- Expense Date Field -->
<div class="form-group">
    {!! Form::label('expense_date', 'Expense Date:') !!}
    <p>{!! $expenditure->expense_date !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $expenditure->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $expenditure->updated_at !!}</p>
</div>

