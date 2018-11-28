@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Expenditure
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($expenditure, ['route' => ['expenditures.update', $expenditure->id], 'method' => 'patch']) !!}

                        @include('expenditures.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection