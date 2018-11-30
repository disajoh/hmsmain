<table class="table table-responsive" id="customers-table">
    <thead>
        <tr>
            <th>Name</th>
       <!--  <th>Surname</th>
        <th>Other Name</th> -->
        <th>Phone</th>
        <th>Email</th>
        <th>Occupation</th>
        <th>Nationality</th>
        <!-- <th>Address</th>
        <th>Passport Number</th>
        <th>Date Issued</th> -->
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($customers as $customer)
        <tr>
            <td><a href="{!! route('customers.show', [$customer->id]) !!}">{!! $customer->first_name .' '. $customer->surname !!}</a></td>
            <!-- <td>{!! $customer->surname !!}</td> -->
            <!-- <td>{!! $customer->other_name !!}</td> -->
            <td><a href="{!! route('customers.show', [$customer->id]) !!}">{!! $customer->phone !!}</a></td>
            <td><a href="{!! route('customers.show', [$customer->id]) !!}">{!! $customer->email !!}</a></td>
            <td><a href="{!! route('customers.show', [$customer->id]) !!}">{!! $customer->occupation !!}</a></td>
            <td><a href="{!! route('customers.show', [$customer->id]) !!}">{!! $customer->nationality !!}</a></td>
           <!--  <td>{!! $customer->address !!}</td>
            <td>{!! $customer->passport_number !!}</td>
            <td>{!! $customer->date_issued !!}</td> -->
            <td>
                {!! Form::open(['route' => ['customers.destroy', $customer->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('customers.show', [$customer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('customers.edit', [$customer->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>