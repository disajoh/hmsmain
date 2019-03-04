@extends('layouts.report')

@section('content')
<page size="A4">
    <div style=" margin: 20mm;">
    
<h1 style="text-align: center;">
	Bagale Revenue Report
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
        	<th>Transaction Date</th>
        	<th>Revenue Source</th>
        	<th>Amount</th>
        	</tr>
    </thead>
    <tbody>
    	 <?php
            $pay=0;
    	 	$i=1;
    	 	$total=0;
    	  ?>
    @foreach($revenues as $revenue)
        <tr>  
            <td>{!! $i !!}</td>
            <td>{!! $revenue->transaction_date->format('D d, M, Y') !!}</td>	
            <td>{!! $revenue->other_revenue_source['name'] !!}</td>
			<td>N {!! number_format($revenue->amount,2) !!}</td>
        </tr>
        <?php
    	 	$i=$i+1;
    	 	$total=$total+$revenue->amount;
    	  ?>
    @endforeach
    @foreach($payments as $payment)
        <?php
        $pay= $pay+$payment->amount_paid;
        ?>
    @endforeach
    <?php
        $total= $total + $pay;
    ?>
    <tr>
        <td>{!! $i !!}</td>
        <td></td>
        <td>Room revenue</td>
        <td>{!! number_format($pay,2) !!}</td>
    </tr>
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