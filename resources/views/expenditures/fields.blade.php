<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Expence Type Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expence_type_id', 'Expence Type Id:') !!}
    {!! Form::number('expence_type_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-6">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::text('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Payment Method Field -->
<div class="form-group col-sm-6">
    {!! Form::label('payment_method', 'Payment Method:') !!}
    {!! Form::select('payment_method',['cash'=>'Cash','cheque'=>'Cheque']) !!}
    
</div>

<!-- Cheque Number -->
<div class="form-group col-sm-6">
    {!! Form::label('cheque_number', 'Cheque Number:') !!}
    {!! Form::text('cheque_number',null, ['class' => 'form-control']) !!}
    
</div>


<!-- Expense Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('expense_date', 'Expense Date:') !!}
    {!! Form::date('expense_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('expenditures.index') !!}" class="btn btn-default">Cancel</a>
</div>
