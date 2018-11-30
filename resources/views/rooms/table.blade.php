<table class="table table-responsive" id="rooms-table">
    <thead>
        <tr>
            <th>Room Number</th>
        <th>Category Id</th>
        <th>Available</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($rooms as $room)
        <tr>
            <td><a href="{!! route('rooms.show', [$room->id]) !!}">{!! $room->room_number !!}</a></td>
            <td><a href="{!! route('rooms.show', [$room->id]) !!}">{!! $room->roomcategory['price'] !!}</a></td>

            <td> <a href="{!! route('rooms.show', [$room->id]) !!}">
                @if($room->available == 1)
                
                    Available
                @else

                    Occupied

                @endif
                </a>
            </td>
            <td>
                {!! Form::open(['route' => ['rooms.destroy', $room->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('rooms.show', [$room->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('rooms.edit', [$room->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>