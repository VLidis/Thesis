<head>
    <style>
        html, body {
            background-color:#f7c6c5;
            color: #636b6f;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }
        .form-text {
            color: #1d2124;
        }
        .text {
            color: #1d2124;
            font-size:25px;
        }
        .col-4 {
            color: #1b1e21;
        }
    </style>
</head>

<body>
<div>
    <p class="font-weight-light text-md-center text-break">Very Close up to 500m, Close up to 1000m, In General Vicinity up to 3000m</p>
</div>
<div class="row justify-content-center">
        <div class="col-6 mb-2 b">
            {!! Form::open(['route'=>'search'])!!}
            <div>
                <strong id="locationSpecs" class="text">Location Parameters:</strong>
            </div>
            <div class="row">
                <div class="col-4">
                    {{Form::label('metro','Metro')}}
                    {{Form::select('metro',['null'=>'Any','Vc'=>'Very close','C'=>'Close','G'=>'In general vicinity'])}}
                </div>
                <div class="col-4">
                    {{Form::label('bus','Other Transports')}}
                    {{Form::select('bus',['null'=>'Any','Vc'=>'Very close','C'=>'Close','G'=>'In general vicinity'])}}
                </div>
                <div class="col-4">
                    {{Form::label('cityCenter','City Center')}}
                    {{Form::select('cityCenter',['null'=>'Any','Vc'=>'Very close','C'=>'Close','G'=>'In general vicinity'])}}
                </div>
                <div class="col-4">
                    {{Form::label('gym','Gym')}}
                    {{Form::select('gym',['null'=>'Any','Vc'=>'Very close','C'=>'Close','G'=>'In general vicinity'])}}
                </div>
                <div class="col-4">
                    {{Form::label('park','Park')}}
                    {{Form::select('park',['null'=>'Any','Vc'=>'Very close','C'=>'Close','G'=>'In general vicinity'])}}
                </div>
                <div class="col-4">
                    {{Form::label('pharmacy','Pharmacy')}}
                    {{Form::select('pharmacy',['null'=>'Any','Vc'=>'Very close','C'=>'Close','G'=>'In general vicinity'])}}
                </div>
                <div class="col-4">
                    {{Form::label('school','School')}}
                    {{Form::select('school',['null'=>'Any','Vc'=>'Very close','C'=>'Close','G'=>'In general vicinity'])}}
                </div>
                <div class="col-4">
                    {{Form::label('supermarket','Supermarket')}}
                    {{Form::select('supermarket',['null'=>'Any','Vc'=>'Very close','C'=>'Close','G'=>'In general vicinity'])}}
                </div>
            </div>
            <br>
            <div>
                <strong id="houseSpecifications" class="text">House Specifications:</strong>
            </div>
            <div>
                <br>
                <storng id="houseSize" class="form-text">House Size:</storng>
            </div>
            <div class="row">
                <div class="col-2">
                    {{Form::label('sizeMin','Min')}}
                    {{Form::select('sizeMin',['null'=>'Min','50'=>'50sqrm','100'=>'100sqrm','150'=>'150sqrm','200'=>'200sqrm'])}}
                </div>
                <div class="col-1">
                    <strong id="to" class="form-text">to</strong>
                </div>
                <div class="col-3">
                    {{Form::label('sizeMax','Max')}}
                    {{Form::select('sizeMax',['null'=>'Max','100'=>'100sqrm','150'=>'150sqrm','200'=>'200sqrm','250'=>'250sqrm','400'=>'250+sqrm'])}}
                </div>
            </div>
            <div>
                <br>
                <strong id="yearBuild" class="form-text">Year Build:</strong>
            </div>
            <div class="row">
                <div class="col-2">
                    {{Form::label('yearMin','Min')}}
                    {{Form::select('yearMin',['null'=>'min','1960'=>'1960','1970'=>'1970','1980'=>'1980','1990'=>'1990','2000'=>'2000','2010'=>'2010'])}}
                </div>
                <div class="col-1">
                    <strong id="to" class="form-text">to</strong>
                </div>
                <div class="col-2">
                    {{Form::label('yearMax','Max')}}
                    {{Form::select('yearMax',['null'=>'max','1970'=>'1970','1980'=>'1980','1990'=>'1990','2000'=>'2000','2010'=>'2010','2010'=>'2010'])}}
                </div>
            </div>
            <div>
                <br>
                <strong id="floor" class="form-text">Floor:</strong>
            </div>
            <div class="row">
                <div class="col-2">
                    {{Form::label('floorMin','Min')}}
                    {{Form::select('floorMin',['null'=>'min','0'=>'0','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5+'])}}
                </div>
                <div class="col-1">
                    <strong id="to" class="form-text">to</strong>
                </div>
                <div class="col-2">
                    {{Form::label('floorMax','Max')}}
                    {{Form::select('floorMax',['null'=>'max','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5+'])}}
                </div>
            </div>
            <div>
                <br>
                <strong id="price" class="form-text">Price:</strong>
            </div>
            <div class="row">
                <div class="col-2">
                    {{Form::label('priceMin','Min')}}
                    {{Form::select('priceMin',['null'=>'min','25000'=>'25000','50000'=>'50000','75000'=>'75000','100000'=>'100000','150000'=>'150000','200000'=>'200000','250000'=>'250000','300000'=>'300000','400000'=>'400000','500000'=>'500000+'])}}
                </div>
                <div class="col-1">
                    <strong id="to" class="form-text">to</strong>
                </div>
                <div class="col-3">
                    {{Form::label('priceMax','Max')}}
                    {{Form::select('priceMax',['null'=>'max','25000'=>'25000','50000'=>'50000','75000'=>'75000','100000'=>'100000','150000'=>'150000','200000'=>'200000','250000'=>'250000','300000'=>'300000','400000'=>'400000','500000'=>'500000+'])}}
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-4">
                    {{Form::label('bedrooms','Bedrooms')}}
                    {{Form::select('bedrooms',['null'=>'Any','1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'More than 5'])}}
                </div>
                <div class="col-4">
                    {{Form::label('heat','Heat')}}
                    {{Form::select('heat',['null'=>'Any','CP'=>'Central Petrol','CG'=>'Central Gas','PG'=>'Private Gas','O'=>'Other'])}}
                </div>
                <div class="col-4">
                    {{Form::label('firstOccupant','First Occupant')}}
                    {{Form::select('firstOccupant',['null'=>'Any','first'=>'First'])}}
                </div>
                <div class="col-4">
                    {{Form::label('singleFloor','Single Floor')}}
                    {{Form::select('singleFloor',['null'=>'Any','S'=>'Single','M'=>'Maisonette'])}}
                </div>
                <div class="col-4">
                    {{Form::label('elevator','Elevator')}}
                    {{Form::select('elevator',['null'=>'Any','1'=>'Has'])}}
                </div>
            </div>
        </div>
        <div class="mt-auto">

            <button class="btn-lg btn-dark btn-outline-success" type="submit">Find</button>

        </div>
        {!! Form::close() !!}
        </div>
    </div>
</body>
