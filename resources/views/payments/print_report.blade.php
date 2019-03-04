@extends('layouts.report')

@section('content')
<page size="A4">
    <div style=" margin: 20mm;">
    
<h1 style="text-align: center;">
	Bagale Room Payment Report
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
        	<th>Date Received</th>
        	<th>Reciept No.</th>
        	<th>Amount Paid</th>
        	</tr>
    </thead>
    <tbody>
    	 <?php
    	 	$i=1;
    	 	$total=0;
    	  ?>
    @foreach($payments as $payment)
        <tr>  
            <td>{!! $i !!}</td>
            <td>{!! $payment->date_received->format('D d, M, Y') !!}
            <td>{!! $payment->id !!}</td>	
			<td>N {!! number_format($payment->amount_paid,2) !!}</td>
        </tr>
        <?php
    	 	$i=$i+1;
    	 	$total=$total+$payment->amount_paid;
    	  ?>
    @endforeach
    <tr>
    	<th>Total</th>
    	<th></th>
    	<th></th>
    	<th>N {!! number_format($total,2) !!}</th>
    </tr>
    </tbody>
</table>
</div>
</page>
@endsection