<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $room->id !!}</p>
</div>

<!-- Room Number Field -->
<div class="form-group">
    {!! Form::label('room_number', 'Room Number:') !!}
    <p>{!! $room->room_number !!}</p>
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    <p>{!! $room->category_id !!}</p>
</div>

<!-- Available Field -->
<div class="form-group">
    {!! Form::label('available', 'Available:') !!}
    <p>{!! $room->available !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $room->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $room->updated_at !!}</p>
</div>

