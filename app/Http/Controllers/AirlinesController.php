<?php

namespace App\Http\Controllers;

use App\Models\Airline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php;

class AirlinesController extends Controller
{
    public function destroy($airline)
    {
        Airline::destroy($airline);
        return redirect('legitarsasag');
    }

    public function edit($airline)
    {
        $adat = DB::table('airlines')
        ->select('*')
        ->where('id','=',$airline)->first();
        return view('airlines.edit', compact('adat'));
    }

    public function update($airline)
    {
        $update = DB::table('airlines')->where('id' , $airline)->update([
            'name' => request('name'),
            'origin' => request('origin')
        ]);
        return redirect('legitarsasag');
    }

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
