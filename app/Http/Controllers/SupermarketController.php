<?php

namespace App\Http\Controllers;

use App\Events\SchoolAdded;
use App\House;
use App\Supermarket;
use Illuminate\Http\Request;

class SupermarketController extends Controller
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
        $supermarket = new Supermarket;
        //
        $supermarket->save();

        event(new SchoolAdded());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supermarket  $supermarket
     * @return \Illuminate\Http\Response
     */
    public function show(Supermarket $supermarket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supermarket  $supermarket
     * @return \Illuminate\Http\Response
     */
    public function edit(Supermarket $supermarket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supermarket  $supermarket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supermarket $supermarket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supermarket  $supermarket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supermarket $supermarket)
    {
        //
    }
}
