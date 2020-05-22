<?php

namespace App\Http\Controllers;

use App\CityCenter;
use App\Events\CityCenterAdded;
use App\House;
use Illuminate\Http\Request;

class CityCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $cityCenter = new CityCenter;
        //
        $cityCenter->save();

        event(new CityCenterAdded());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\CityCenter  $cityCenter
     * @return \Illuminate\Http\Response
     */
    public function show(CityCenter $cityCenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CityCenter  $cityCenter
     * @return \Illuminate\Http\Response
     */
    public function edit(CityCenter $cityCenter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CityCenter  $cityCenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CityCenter $cityCenter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CityCenter  $cityCenter
     * @return \Illuminate\Http\Response
     */
    public function destroy(CityCenter $cityCenter)
    {
        //
    }
}
