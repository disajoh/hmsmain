
<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Staff:') !!}
    {!! $expenditure->user['first_name'] !!}
</div>

<!-- Expence Type Id Field -->
<div class="form-group">
    {!! Form::label('expence_type_id', 'Expence Type Id:') !!}
    {!! $expenditure->expence_type['name'] !!}
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! $expenditure->description !!}
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    {!! $expenditure->amount !!}
</div>

<!-- Payment Method Field -->
<div class="form-group">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    {!! $expenditure->payment_method !!}
</div>

<!-- Cheque Number for cheque payments -->
<div class="form-group">
    {!! Form::label('cheque_number', 'Cheque Number:') !!}
    {!! $expenditure->cheque_number !!}
</div>

<!-- Expense Date Field -->
<div class="form-group">
    {!! Form::label('expense_date', 'Expense Date:') !!}
    {!! $expenditure->expense_date->format('D d, M, Y') !!}
</div>

