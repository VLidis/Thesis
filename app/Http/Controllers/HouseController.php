<?php

namespace App\Http\Controllers;

use App\Bus;
use App\CityCenter;
use App\Gym;
use App\House;
use App\Metro;
use App\Park;
use App\School;
use App\Supermarket;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Foreach_;
use Illuminate\Support\Collection;
use App\Pharmacy;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Respons
     */
    public function index()
    {

        $results = House::All();
        return view('resultsview', compact('results'));

    }

    /*public function view($request){
        return $request;
        return view('viewhouse', compact('search'));
    }*/

    public function initialize()
    {
        $houses = House::all();
        $pharmacies = Pharmacy::all();
        $metros = Metro::all();
        $supermarkets = Supermarket::all();
        $schools = School::all();
        $gyms = Gym::all();
        $parks = Park::all();
        $cityCenters = CityCenter::all();
        $buses = Bus::all();

        foreach($houses as $house)
        {

           $a = $house->closest($pharmacies);
           $b = $house->closest($metros);
           $c = $house->closest($supermarkets);
           $d = $house->closest($schools);
           $e = $house->closest($gyms);
           $f = $house->closest($parks);
           $g = $house->closest($cityCenters);
           $h = $house->closest($buses);

            $house->pharmacyD = $a['dist'];
            $house->metroD = $b['dist'];
            $house->supermarketD= $c['dist'];
            $house->schoolD = $d['dist'];
            $house->gymD = $e['dist'];
            $house->parkD = $f['dist'];
            $house->cityCenterD = $g['dist'];
            $house->busD = $h['dist'];

           $house->save();
        }
        return 'Succesful initialization';

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $house = new House;
        $pharmacies = \App\Pharmacy::all();
        $metros = Metro::all();
        $supermarkets = Supermarket::all();
        $schools = School::all();
        $gyms = Gym::all();
        $parks = Park::all();
        $cityCenters = CityCenter::all();
        $buses = Bus::all();


        $a = $house->closest($pharmacies);
        $b = $house->closest($metros);
        $c = $house->closest($supermarkets);
        $d = $house->closest($schools);
        $e = $house->closest($gyms);
        $f = $house->closest($parks);
        $g = $house->closest($cityCenters);
        $h = $house->closest($buses);

        $house->pharmacyD = $a['dist'];
        $house->metroD = $b['dist'];
        $house->supermarketD= $c['dist'];
        $house->schoolD = $d['dist'];
        $house->gymD = $e['dist'];
        $house->parkD = $f['dist'];
        $house->cityCenterD = $g['dist'];
        $house->busD = $h['dist'];

            $house->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function show(House $house)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function edit(House $house)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, House $house)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\House  $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(House $house)
    {
        //
    }
}
