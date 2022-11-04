<?php

namespace App\Http\Controllers;

use App\Models\Passanger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PassangerController extends Controller
{
    public function show($id)
    {
        $adat = DB::table('passangers')
        ->select('*')
        ->where('flightid','=',$id)
        ->get();
        return view('passanger.show', compact('adat'));
    }
    public function create()
    {
        $adat = DB::table('flights')
        ->select('*')
        ->get();
        return view('passanger.create', compact('adat'));
    }
    public function store(Request $request)
    {
        $s = new Passanger();
        $s->name = request("name");
        $s->personalid = request("szemszam");
        $s->bday = request("szuldat");
        $s->flightid = request("repid");
        $s->save();
        return view("welcome");

    }
}
