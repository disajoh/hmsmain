@extends('layouts.report')

@section('content')
<page size="A4">
    <div style=" margin: 20mm;">
    
<h1 style="text-align: center;">
	Bagale Expenditure Report
</h1>
<div class="clearfix"></div>
<div class="row" style="padding-left: 20px; border-bottom: 3px solid #EEE;">
	<div class="col-sm-6">
	    {!! Form::label('from', 'From:') !!}
	    {!! $fromDate !!}
	</div>

	<div class="col-sm-6">
	    {!! Form::label('to', 'To:') !!}
	    {!! $toDate !!}
	</div>
</div>
<div class="clearfix"></div>
<table class="table table-responsive" id="payments-table">
    <thead>
        <tr>
        	<th>S/N</th>
        	<th>Expence Date</th>
        	<th>Description</th>
            <th>Method</th>
            <th>Cheque No.</th>
        	<th>Amount</th>
        	</tr>
    </thead>
    <tbody>
    	 <?php
    	 	$i=1;
    	 	$total=0;
    	  ?>
    @foreach($expenditures as $expenditure)
        <tr>  
            <td>{!! $i !!}</td>
            <td>{!! $expenditure->expense_date->format('D d, M, Y') !!}
            <td>{!! $expenditure->description !!}</td>	
            <td>{!! $expenditure->payment_method !!}</td>
            <td>{!! $expenditure->cheque_number !!}</td>
			<td>N {!! number_format($expenditure->amount,2) !!}</td>
        </tr>
        <?php
    	 	$i=$i+1;
    	 	$total=$total+$expenditure->amount;
    	  ?>
    @endforeach
    <tr>
    	<th>Total</th>
    	<th></th>
    	<th></th>
        <th></th>
        <th></th>
    	<th>N {!! number_format($total,2) !!}</th>
    </tr>
    </tbody>
</table>
</div>
</page>
@endsection