<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{!! route('users.index') !!}"><i class="fa fa-edit"></i><span>Users</span></a>
</li>


<li class="{{ Request::is('roomCategories*') ? 'active' : '' }}">
    <a href="{!! route('roomCategories.index') !!}"><i class="fa fa-edit"></i><span>Room Categories</span></a>
</li>

<li class="{{ Request::is('bookings*') ? 'active' : '' }}">
    <a href="{!! route('bookings.index') !!}"><i class="fa fa-edit"></i><span>Bookings</span></a>
</li>

<li class="{{ Request::is('bookings*') ? 'active' : '' }}">
    <a href="{!! route('new') !!}"><i class="fa fa-edit"></i><span>New Reservation</span></a>
</li>

<li class="{{ Request::is('rooms*') ? 'active' : '' }}">
    <a href="{!! route('rooms.index') !!}"><i class="fa fa-edit"></i><span>Rooms</span></a>
</li>

<li class="{{ Request::is('customers*') ? 'active' : '' }}">
    <a href="{!! route('customers.index') !!}"><i class="fa fa-edit"></i><span>Customers</span></a>
</li>


@if(Auth::user()->role_id < 4)

<li class="{{ Request::is('expenditures*') ? 'active' : '' }}">
    <a href="{!! route('expenditures.index') !!}"><i class="fa fa-edit"></i><span>Expenditures</span></a>
</li>

@endif

@if(Auth::user()->role_id < 3)
<li class="{{ Request::is('revenues*') ? 'active' : '' }}">
    <a href="{!! route('revenues.index') !!}"><i class="fa fa-edit"></i><span>Revenues</span></a>
</li>

<li class="{{ Request::is('expenseTypes*') ? 'active' : '' }}">
    <a href="{!! route('expenseTypes.index') !!}"><i class="fa fa-edit"></i><span>Expense Types</span></a>
</li>

<li class="{{ Request::is('otherRevenueSources*') ? 'active' : '' }}">
    <a href="{!! route('otherRevenueSources.index') !!}"><i class="fa fa-edit"></i><span>Other Revenue Sources</span></a>
</li>

@endif


@if(Auth::user()->role_id == 1)
<li class="{{ Request::is('roles*') ? 'active' : '' }}">
    <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>

@endif<li class="{{ Request::is('payments*') ? 'active' : '' }}">
    <a href="{!! route('payments.index') !!}"><i class="fa fa-edit"></i><span>Payments</span></a>
</li>

<li class="{{ Request::is('bookingRefunds*') ? 'active' : '' }}">
    <a href="{!! route('bookingRefunds.index') !!}"><i class="fa fa-edit"></i><span>Booking Refunds</span></a>
</li>

