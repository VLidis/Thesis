@extends('layouts.app')


@section('content')
    <div class="container border-bottom">
        <div class="row justify-content-center">
            @if ($search->isEmpty())
                <div class="title text-xl-center text-dark">
                    Sadly, we currently have no House matching your citiria. Try to alter some or just broaden your search range. Thank you
                </div>
            @else
                <div class="container-fluid">
                    <div class="title text-xl-center mt-1 text-dark">
                        Houses that Perfectly fits your needs
                    </div>
                </div>
                @foreach($search as $house)
                <div class="col-md-4 text-truncate m-1">
                    <div class="card m-1">
                        <div class="card-body bg-info text-dark">
                            <h5 class="card-body">Floor:
                                {{$house->floor}}
                            </h5>
                            <h5 class="card-body">Size:
                                {{$house->size}}
                            </h5>
                            <h5 class="card-body">Bedrooms:
                                {{$house->bedrooms}}
                            </h5>
                            <h5 class="card-body">Price:
                                {{$house->price}}
                            </h5>
                            <h5 class="card-body">Year Build:
                                {{$house->year}}
                            </h5>
                            <h5 class="card-subtitle">Heat:
                                @if($house->heat=='0')
                                    Central Petrol
                                @elseif($house->heat=='1')
                                    Central Gas
                                @elseif($house->heat=='2')
                                    Private Gas
                                @else
                                    Other
                                @endif
                            </h5>
                            <h5 class="card-subtitle">First Occupant:
                                @if($house->newBuild==true)
                                    First
                                @else
                                    Not First
                                @endif
                            </h5>
                            <h5 class="card-subtitle">Single Floor:
                                @if($house->singleFloor==true)
                                    Single Floor
                                @else
                                    Maisonette
                                @endif
                            </h5>
                            <h5 class="card-subtitle">Elevator:
                                @if($house->hasElevator==true)
                                    Has elevator
                                @else
                                    Doesnt have
                                @endif
                            </h5>
                            <h6 class="card-subtitle">Position:
                                {{$house->longitude}} {{$house->latitude}}
                            </h6>
                            <p class="card-text text-wrap text-muted">Description:
                                {{$house->description}}
                            </p>
                            <p class="card-text">Points of interest info:</p>
                            <div class="card-footer">
                                <h6 class="card-subtitle">Distance to metro:
                                    {{$house->metroD}}
                                </h6>
                                <h6 class="card-subtitle">Distance to other Transports:
                                    {{$house->busD}}
                                </h6>
                                <h6 class="card-subtitle">Distance to City Center:
                                    {{$house->cityCenterD}}
                                </h6>
                                <h6 class="card-subtitle">Distance to Gym:
                                    {{$house->gymD}}
                                </h6>
                                <h6 class="card-subtitle">Distance to Park:
                                    {{$house->parkD}}
                                </h6>
                                <h6 class="card-subtitle">Distance to Pharmacy:
                                    {{$house->pharmacyD}}
                                </h6>
                                <h6 class="card-subtitle">Distance to School:
                                    {{$house->schoolD}}
                                </h6>
                                <h6 class="card-subtitle">Distance to Supermarket:
                                    {{$house->supermarketD}}
                                </h6>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            @endif
        </div>
        <div class="button">
            <a href="http://127.0.0.1:8000//test"class="btn float-xl-right btn-outline-dark" >New Search</a>
        </div>
    </div>
@endsection

