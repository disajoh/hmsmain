<!-- From Date Field -->
<div class="form-group col-sm-4">
    {!! Form::label('from_date', 'From:') !!}
    {!! Form::date('from_date', null, ['class' => 'form-control']) !!}
</div>

<!-- To Date Field -->
<div class="form-group col-sm-4">
    {!! Form::label('to_date', 'To:') !!}
    {!! Form::date('to_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Generate Report', ['class' => 'btn btn-primary']) !!}    
</div>