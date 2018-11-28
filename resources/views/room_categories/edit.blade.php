@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Room Category
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($roomCategory, ['route' => ['roomCategories.update', $roomCategory->id], 'method' => 'patch']) !!}

                        @include('room_categories.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection