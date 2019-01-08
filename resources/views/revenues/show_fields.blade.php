
<!-- Other Revenue Source Id Field -->
<div class="form-group">
    {!! Form::label('other_revenue_source_id', 'Other Revenue Source:') !!}
    {!! $revenue->other_revenue_source['name'] !!}
</div>

<!-- User Id Field -->
<div class="form-group">
    {!! Form::label('user_id', 'Staff:') !!}
    {!! $revenue->user['first_name'] !!}
    {!! $revenue->user['surname'] !!}
</div>

<!-- Amount Field -->
<div class="form-group">
    {!! Form::label('amount', 'Amount:') !!}
    {!! $revenue->amount !!}
</div>

<!-- Transaction Date Field -->
<div class="form-group">
    {!! Form::label('transaction_date', 'Transaction Date:') !!}
    {!! $revenue->transaction_date !!}
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    {!! $revenue->created_at->format('D d, M, Y')  !!}
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    {!! $revenue->updated_at->format('D d, M, Y') !!}
</div>

