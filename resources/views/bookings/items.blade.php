<!-- First Name Field -->
<div class="panel-heading">
    <h3>Customer Details</h3>
</div>
<div class="panel-body">
    <div class="form-group col-sm-6">
        {!! Form::label('first_name', 'First Name:') !!}
        {!! Form::text('first_name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Surname Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('surname', 'Surname:') !!}
        {!! Form::text('surname', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Other Name Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('other_name', 'Other Name:') !!}
        {!! Form::text('other_name', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Phone Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('phone', 'Phone:') !!}
        {!! Form::text('phone', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Email Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::email('email', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Occupation Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('occupation', 'Occupation:') !!}
        {!! Form::text('occupation', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Nationality Field -->
    <!-- <div class="form-group col-sm-6">
        {!! Form::label('nationality', 'Nationality:') !!}
        {!! Form::text('nationality', null, ['class' => 'form-control']) !!}
    </div> -->

    <?php
    $countries = array("Afghanistan", "Albania", "Algeria", "American Samoa", "Andorra", "Angola", "Anguilla", "Antarctica", "Antigua and Barbuda", "Argentina", "Armenia", "Aruba", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bermuda", "Bhutan", "Bolivia", "Bosnia and Herzegowina", "Botswana", "Bouvet Island", "Brazil", "British Indian Ocean Territory", "Brunei Darussalam", "Bulgaria", "Burkina Faso", "Burundi", "Cambodia", "Cameroon", "Canada", "Cape Verde", "Cayman Islands", "Central African Republic", "Chad", "Chile", "China", "Christmas Island", "Cocos (Keeling) Islands", "Colombia", "Comoros", "Congo", "Congo, the Democratic Republic of the", "Cook Islands", "Costa Rica", "Cote d'Ivoire", "Croatia (Hrvatska)", "Cuba", "Cyprus", "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "East Timor", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Ethiopia", "Falkland Islands (Malvinas)", "Faroe Islands", "Fiji", "Finland", "France", "France Metropolitan", "French Guiana", "French Polynesia", "French Southern Territories", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Gibraltar", "Greece", "Greenland", "Grenada", "Guadeloupe", "Guam", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Heard and Mc Donald Islands", "Holy See (Vatican City State)", "Honduras", "Hong Kong", "Hungary", "Iceland", "India", "Indonesia", "Iran (Islamic Republic of)", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, Democratic People's Republic of", "Korea, Republic of", "Kuwait", "Kyrgyzstan", "Lao, People's Democratic Republic", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libyan Arab Jamahiriya", "Liechtenstein", "Lithuania", "Luxembourg", "Macau", "Macedonia, The Former Yugoslav Republic of", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Martinique", "Mauritania", "Mauritius", "Mayotte", "Mexico", "Micronesia, Federated States of", "Moldova, Republic of", "Monaco", "Mongolia", "Montserrat", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "Netherlands Antilles", "New Caledonia", "New Zealand", "Nicaragua", "Niger", "Nigeria", "Niue", "Norfolk Island", "Northern Mariana Islands", "Norway", "Oman", "Pakistan", "Palau", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Pitcairn", "Poland", "Portugal", "Puerto Rico", "Qatar", "Reunion", "Romania", "Russian Federation", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Seychelles", "Sierra Leone", "Singapore", "Slovakia (Slovak Republic)", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Georgia and the South Sandwich Islands", "Spain", "Sri Lanka", "St. Helena", "St. Pierre and Miquelon", "Sudan", "Suriname", "Svalbard and Jan Mayen Islands", "Swaziland", "Sweden", "Switzerland", "Syrian Arab Republic", "Taiwan, Province of China", "Tajikistan", "Tanzania, United Republic of", "Thailand", "Togo", "Tokelau", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Turks and Caicos Islands", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "United States Minor Outlying Islands", "Uruguay", "Uzbekistan", "Vanuatu", "Venezuela", "Vietnam", "Virgin Islands (British)", "Virgin Islands (U.S.)", "Wallis and Futuna Islands", "Western Sahara", "Yemen", "Yugoslavia", "Zambia", "Zimbabwe");

    ?>

    <div class="form-group col-sm-6">
                <label for="nationality">Nationality</label>
                <select name="nationality" class="form-control col-sm-6" required>
                    <option value selected ></option>
                    <?php
                    foreach($countries as $key => $value):
                    echo '<option value="'.$value.'">'.$value.'</option>'; //close your tags!!
                    endforeach;
                    ?>
                </select>
    </div>
    <!-- Address Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('address', 'Address:') !!}
        {!! Form::text('address', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Passport Number Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('passport_number', 'Passport Number:') !!}
        {!! Form::text('passport_number', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Date Issued Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('date_issued', 'Date Issued:') !!}
        {!! Form::date('date_issued', null, ['class' => 'form-control']) !!}
    </div>
</div>

<div class="panel-heading">
    <h3>Booking Details</h3>
</div>
<div class="panel-body">
    
    <!-- Room Id Field -->
    <div class="form-group col-sm-6">
      <label for="sel1">Rooms:</label>
      <select class="form-control" id="sel1" name="room_id">
        @foreach($rooms as $room)
            @if($room['available'] == true)
                <option value="{{ $room['id'] }}">{{ $room['room_number'] }} | {{ $room->roomcategory['name'] }}</option>
            @endif
        @endforeach
      </select>
    </div>

    <!-- Arrival Date Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('arrival_date', 'Arrival Date:') !!}
        {!! Form::date('arrival_date', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Departure Date Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('departure_date', 'Departure Date:') !!}
        {!! Form::date('departure_date', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Purpose Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('purpose', 'Purpose:') !!}
        {!! Form::text('purpose', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Next Destination Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('next_destination', 'Next Destination:') !!}
        {!! Form::text('next_destination', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Transport Means Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('transport_means', 'Transport Means:') !!}
        {!! Form::text('transport_means', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Where From Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('where_from', 'Where From:') !!}
        {!! Form::text('where_from', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Vehicle Number Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('vehicle_number', 'Vehicle Number:') !!}
        {!! Form::text('vehicle_number', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Reserved By Field -->
    <div class="form-group col-sm-6">
        {!! Form::label('reserved_by', 'Reserved By:') !!}
        {!! Form::text('reserved_by', null, ['class' => 'form-control']) !!}
    </div>

    <!-- Submit Field -->
    <div class="form-group col-sm-12">
        {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        <a href="{!! route('bookings.index') !!}" class="btn btn-default">Cancel</a>
    </div>
</div>