@extends('layouts.app')

@section('content')
    <section class="content-header">
        <section class="content-header">
            <h1 class="pull-left">Booking</h1>
            <h1 class="pull-right">
               <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('bookings.edit', [$booking->id]) !!}">Edit</a>
            </h1>
        </section>
        
    </section>
    <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('bookings.show_fields')
                    <a href="{!! route('bookings.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
