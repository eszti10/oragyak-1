<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function show($slug)
    {
        //return view('post', compact('post'));
        $post = DB::table('posts')->where('slug', $slug)->first();
        $s = DB::select('Select * from posts');
        return view('post', compact('post'));
        
    }
}
