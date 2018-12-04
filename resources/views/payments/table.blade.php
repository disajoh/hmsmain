<table class="table table-responsive" id="payments-table">
    <thead>
        <tr>
        <th>Reciept No.</th>
        <th>Cost</th>
        <th>Amount Paid</th>
        <th>Discount</th>
        <th>Date Received</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($payments as $payment)
        <tr>

            <?php
                $diff= date_diff($payment->booking['departure_date'], $payment->booking['arrival_date']);
                $days=intval($diff->format("%d"));
                $price= $payment->booking->room->roomcategory['price']*$days;
            ?>
            <td><a href="{!! route('payments.show', [$payment->id]) !!}">{!! $payment->id !!}</a></td>
            <td><a href="{!! route('payments.show', [$payment->id]) !!}">{!! $price !!}</a></td>
            <td><a href="{!! route('payments.show', [$payment->id]) !!}">{!! $payment->amount_paid !!}</a></td>
            <td><a href="{!! route('payments.show', [$payment->id]) !!}">{!! $payment->discount !!}</a></td>
            <td><a href="{!! route('payments.show', [$payment->id]) !!}">{!! $payment->date_received->format('D d, M, Y') !!}</a></td>

            <td>
                {!! Form::open(['route' => ['payments.destroy', $payment->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('payments.show', [$payment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('payments.edit', [$payment->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>