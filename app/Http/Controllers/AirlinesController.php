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
<<<<<<< HEAD
            ->select('*')
            ->where('id', '=', $airline)->first();
=======
        ->select('*')
        ->where('id','=',$airline)->first();
>>>>>>> b0a30e549f7b01362544e360e4da41ed380044df
        return view('airlines.edit', compact('adat'));
    }

    public function update($airline)
    {
<<<<<<< HEAD
        $update = DB::table('airlines')->where('id', $airline)->update([
            'name' => request('name'),
            'origin' => request('origin')
        ]);

=======
        $update = DB::table('airlines')->where('id' , $airline)->update([
            'name' => request('name'),
            'origin' => request('origin')
        ]);
>>>>>>> b0a30e549f7b01362544e360e4da41ed380044df
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
            ->where('airlinid', '=', $re)
            ->get();
        return view('airlines.show', compact('adat'));
    }

    public function postcreate()
    {
        return view("airlines.create");
    }
    public function store(Request $request)
    {
<<<<<<< HEAD

        if (request("name") == "") {
            echo "Kötelező megadni!";
        } elseif (request("origin") == "") {
            echo "Kötelező központi várost megadni!";
        } else {
           if (strlen(request("name")) < 4 || strlen(request("origin")) < 4) {
                echo "Legalább 5 karakternek kell lennie!";
            } else {
=======
        if(request("name") == ""){
            echo "Kötelező nevet megadni!";
        }
        elseif(request("origin") == ""){
            echo "Kötelező központi várost megadni!";
        }
        else{
            if(strlen(request("name")) < 4 ||  strlen(request("origin")) < 4 ){
                echo "Legalább 5 karakternek lennie kell!";
            }
            else{
>>>>>>> b0a30e549f7b01362544e360e4da41ed380044df
                $s = new Airline();
                $s->name = request("name");
                $s->origin = request("origin");
                $s->save();
<<<<<<< HEAD
               // return view("welcome");
=======
>>>>>>> b0a30e549f7b01362544e360e4da41ed380044df
                echo "Sikeres volt a tárolás";
            }
        }
    }
}
