<?php

namespace App\Http\Controllers;

use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance
     *
     * @return void
     */
    public function index()
    {
        $houses = DB::select("select * from houses");

        return view('home')
            ->with("houses", $houses);
    }

    public function test () {

        $houses= House::All();

        return view('resultView',compact('houses'));

    }

}


