<!-- Id Field -->
<!-- <div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $room->id !!}
</div> -->

<!-- Room Number Field -->
<div class="form-group">
    {!! Form::label('room_number', 'Room Number:') !!}
    {!! $room->room_number !!}
</div>

<!-- Category Id Field -->
<div class="form-group">
    {!! Form::label('category_id', 'Category Id:') !!}
    {!! $room->roomcategory['name'] !!}
</div>

<!-- Available Field -->
<div class="form-group">
    {!! Form::label('available', 'Room Status:') !!}

    @if($room->available == 1)

        {!! 'Available' !!}

    
    @else
        {!! 'Occupied' !!}
    
    @endif
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Added:') !!}
    {!! $room->created_at->format('D d, M, Y') !!}
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated:') !!}
    {!! $room->updated_at->format('D d, M, Y') !!}
</div>

