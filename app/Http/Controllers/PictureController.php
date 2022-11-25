<?php

namespace App\Http\Controllers;

use App\Models\Picture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PictureController extends Controller
{
    public function create()
    {
        return view("picture.create");
    }
<<<<<<< HEAD

=======
>>>>>>> b0a30e549f7b01362544e360e4da41ed380044df
    public function show()
    {
        $keplekeres = DB::table('pictures')->select("*")->get();
        return view("picture.show", compact("keplekeres"));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
<<<<<<< HEAD
                'file' => 'required|mimes:png,jpg,jfif|max:2048'
            ]
        );
        $save=new Picture();
        if($request->file()){
            $renames = time()."_".rand() . $request->file->getClientOriginalName();
            $picture = $request->file('file')->storeAs('kepfeltoltes',$renames,'public');
            $save->picturename=$renames;
            $save->filelocation="storage/" . $picture;
            $save->save();
        }
        return redirect("/kepmegtekintese");

=======
                'file' => 'required|mimes:jpg,png|max:2048'
            ]
        );
        $save = new Picture();
        if ($request->file()) {
            $renames = time() . "_" . rand() . $request->file->getClientOriginalName();
            $picture = $request->file('file')->storeAs('kepfeltolt', $renames, 'public');
            $save->picturename = $renames;
            $save->filelocation = "storage/" . $picture;
            $save->save();
        }
        return redirect("/kepekmegtekintese");
>>>>>>> b0a30e549f7b01362544e360e4da41ed380044df
    }
}
