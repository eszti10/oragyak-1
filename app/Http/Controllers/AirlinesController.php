<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AirlinesController extends Controller
{
    public function index()
    {
        $adat = DB::table('airlines')
        ->select('*')
        ->get();
        return view('airlines.index', compact('adat'));
    }

    public function show($re)
    {
        $adat = DB::table('flights')
        ->select('*')
        ->where('airlinid','=',$re)
        ->get();
        return view('airlines.show', compact('adat'));
    }

    public function postcreate()
    {
        return view("airlines.create");
    }
    public function store(Request $request)
    {
        $s = new Airline();
        $s->name = request("name");
        $s->origin = request("origin");
        $s->save();
        return view("welcome");

    }
}
