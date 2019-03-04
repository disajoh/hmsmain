@extends('layouts.report')

@section('content')
<page size="A4" layout="landscape">
    <div style=" margin: 20mm;">
<h1 style="text-align: center;">
	Bagale Bookings Report
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
        	<th>Date Arrived</th>
            <th>Departure Date</th>
        	<th>Room</th>
        	<th>Customer Name</th>
            <th>Address</th>
            <th>Purpose</th>
            <th>Phone Number</th>
        	</tr>
    </thead>
    <tbody>
    	 <?php
    	 	$i=1;
    	  ?>
    @foreach($bookings as $booking)
        <tr>  
            <td>{!! $i !!}</td>
            <td>{!! $booking->arrival_date->format('D d, M, Y') !!}</td>
            <td>{!! $booking->departure_date->format('D d, M, Y') !!}</td>
            <td>{!! $booking->room['room_number'] !!}</td>
            <td>{!! $booking->customer['first_name'] .' '.$booking->customer['surname']!!}</td>
            <td>{!! $booking->customer['address'] !!}</td>
            <td>{!! $booking->purpose !!}</td>	
			<td>{!! $booking->customer['phone'] !!}</td>
        </tr>
        <?php
    	 	$i=$i+1;
    	  ?>
    @endforeach
    </tbody>
</table>
</div>
</page>
@endsection