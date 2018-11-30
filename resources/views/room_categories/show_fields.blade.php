<!-- Id Field -->
<!-- <div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $roomCategory->id !!}</p>
</div>

 -->
<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! $roomCategory->name !!}
</div>

<!-- Price Field -->
<div class="form-group">
    {!! Form::label('price', 'Price:') !!}
    {!! $roomCategory->price !!}
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Added on:') !!}
    {!! $roomCategory->created_at->format('D d, M, Y') !!}
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated:') !!}
    {!! $roomCategory->updated_at->format('D d, M, Y') !!}
</div>

