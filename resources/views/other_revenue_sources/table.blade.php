<table class="table table-responsive" id="otherRevenueSources-table">
    <thead>
        <tr>
            <th>Name</th>
        <th>Description</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($otherRevenueSources as $otherRevenueSource)
        <tr>
            <td><a href="{!! route('otherRevenueSources.show', [$otherRevenueSource->id]) !!}">{!! $otherRevenueSource->name !!}</a></td>
            <td><a href="{!! route('otherRevenueSources.show', [$otherRevenueSource->id]) !!}">{!! $otherRevenueSource->description !!}</a></td>
            <td>
                {!! Form::open(['route' => ['otherRevenueSources.destroy', $otherRevenueSource->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('otherRevenueSources.show', [$otherRevenueSource->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('otherRevenueSources.edit', [$otherRevenueSource->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>