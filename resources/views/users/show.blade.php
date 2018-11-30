@extends('layouts.app')

@section('content')
  @if(Auth::user()->role_id < 2 | Auth::user()->id == $user->id)

         <section class="content-header">
             <h1 class="pull-left">Users</h1>
             <h1 class="pull-right">
                <a class="btn btn-primary pull-right" style="margin-top: -10px;margin-bottom: 5px" href="{!! route('users.edit', [$user->id]) !!}">Edit</a>
             </h1>
         </section>
         
     </section>
     <div class="content">
         <div class="clearfix"></div>

         @include('flash::message')

         <div class="clearfix"></div>
   @endif
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('users.show_fields')
                    <a href="{!! route('users.index') !!}" class="btn btn-default">Back</a>
                </div>
            </div>
        </div>
    </div>
@endsection
