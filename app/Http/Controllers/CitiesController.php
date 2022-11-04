<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;

class CitiesController extends Controller
{
    public function postcreate()
    {
        return view("city.create");
    }
    public function store(Request $request)
    {
        $s = new City();
        $s->name = request("name");
        $s->save();
        return view("welcome");

    }
}
