<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OraiFController extends Controller
{
    public function show($nev)
    {
        $adat = DB::table('oraifs')->where('Nev', $nev)->first();
        return view('oraif', compact('adat'));
    }
}
