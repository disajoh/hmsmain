
<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Staff:') !!}
    <p>{!! $expenditure->user['first_name'] !!}</p>
</div>

<!-- Expence Type Id Field -->
<div class="form-group">
    {!! Form::label('expence_type_id', 'Expence Type Id:') !!}
    <p>{!! $expenditure->expence_type['name'] !!}</p>
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

<!-- Cheque Number for cheque payments -->
<div class="form-group">
    {!! Form::label('cheque_number', 'Cheque Number:') !!}
    <p>{!! $expenditure->cheque_number !!}</p>
</div>

<!-- Expense Date Field -->
<div class="form-group">
    {!! Form::label('expense_date', 'Expense Date:') !!}
    <p>{!! $expenditure->expense_date !!}</p>
</div>

