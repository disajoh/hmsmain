@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Payment
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('payments.show_fields')
                    <a href="{!! route('print', [$payment->id]) !!}" class="btn">Print Preview</a>
                    
                    <script type="text/javascript">

                         $(document).ready(function(){

                                  $('.btn').printPage();

                         });

                         <INPUT TYPE="button" onClick="window.print()">

                    </script>
                </div>
            </div>
        </div>
    </div>
@endsection
