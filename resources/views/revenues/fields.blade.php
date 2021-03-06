<!-- Other Revenue Source Id Field -->
<!-- <div class="form-group col-sm-6">
    {!! Form::label('other_revenue_source_id', 'Other Revenue Source Id:') !!}
    {!! Form::number('other_revenue_source_id', null, ['class' => 'form-control']) !!}
</div>
-->
<div class="form-group col-sm-6">
    <label for="sel1">Revenue Source:</label>
    <select class="form-control" id="sel1" name="other_revenue_source_id">
        @foreach($revenueSources as $revenueSource)
            
            <option value="{{ $revenueSource['id'] }}">{{ $revenueSource['name'] }}</option>
            
        @endforeach
    </select>
</div>

<!-- Amount Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amount', 'Amount:') !!}
    {!! Form::number('amount', null, ['class' => 'form-control']) !!}
</div>

<!-- Transaction Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('transaction_date', 'Transaction Date:') !!}
    {!! Form::date('transaction_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('revenues.index') !!}" class="btn btn-default">Cancel</a>
</div>
