@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Expense Type
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($expenseType, ['route' => ['expenseTypes.update', $expenseType->id], 'method' => 'patch']) !!}

                        @include('expense_types.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection