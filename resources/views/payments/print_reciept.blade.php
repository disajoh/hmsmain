@extends('layouts.print')

@section('content')
    <div id="invoice-POS">
    
    <center id="top">
      <div class="logo"></div>
      <div class="info"> 
        <h2>Bagale Motels Limited</h2>
      </div><!--End Info-->
    </center><!--End InvoiceTop-->
    
    <div id="mid">
      <div class="info">
        <p> 
            3 Bagale Street, Beside Jimeta Temporary Stadium P.O.Box 5245 J/Yola</br>
            08057159987, 07031689423</br>
        </p>
      </div>
    </div><!--End Invoice Mid-->
    
    <div id="bot">
        @include('payments.show_fields')
    </div><!--End InvoiceBot-->
  </div><!--End Invoice-->

@endsection
