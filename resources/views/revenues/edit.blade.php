@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Revenue
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($revenue, ['route' => ['revenues.update', $revenue->id], 'method' => 'patch']) !!}

                        @include('revenues.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection