@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Other Revenue Source
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($otherRevenueSource, ['route' => ['otherRevenueSources.update', $otherRevenueSource->id], 'method' => 'patch']) !!}

                        @include('other_revenue_sources.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection