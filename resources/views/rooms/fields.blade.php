<!-- Room Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('room_number', 'Room Number:') !!}
    {!! Form::text('room_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Category Id Field -->
<div class="form-group col-sm-6">
    @if(isset($roomCategories))
        <label for="sel1">Category:</label>
        <select class="form-control" id="sel1" name="category_id">
          @foreach($roomCategories as $roomCategory)

              <option value="{{ $roomCategory['id'] }}">{{ $roomCategory['name'] }}</option>
          @endforeach

        </select>
    @else

        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::number('category_id', null, ['class' => 'form-control']) !!}

    @endif
</div>

<div class="form-group col-sm-6">
  
</div>



<!-- Available Field -->
<div class="form-group col-sm-6">
    {!! Form::label('available', 'Available:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('available', false) !!}
        {!! Form::checkbox('available',1, true) !!} 1
    </label>
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('rooms.index') !!}" class="btn btn-default">Cancel</a>
</div>
