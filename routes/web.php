<?php

use App\Http\Controllers\AirlinesController;
use App\Http\Controllers\CitiesController;
use App\Http\Controllers\PassangerController;
use App\Http\Controllers\PictureController;
use App\Models\Passanger;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $user = "Donát";
    return view('welcome',[
        'name' => $user
    ]);
});



Route::get('/aloldal', function () {
    return view('aloldal');
});

Route::get('/arraytest', function () {
    $task = [
        '1 adat',
        '2. adat',
        '3. adat'
    ];
    $asd = "valami";
    return view('arraytest')->with([
        'asd' => $asd,
        'task' => $task
    ]);
});

Route::get('/urllekeres' , function(){
    return view('urllekeres',[
        'ertek' => request('ertek'),
        'adat' => request('adat'),
        'alert' => '<script>alert("alert");</script>'
]);
});

/*Route::get('/post/{post}', function ($post) {
    $posts = [
        "ez-az_elso" => "Hello ez az első oldal",
        "ez-a-masodik" => "Ez a második oldal"
    ];
    if (!array_key_exists($post, $posts)){
        abort(404);
    }
    return view('post', [
        'post' => $posts[$post] ?? "Nincs ilyen oldal"
    ]);
});
*/

Route::get("/posts/{post}", [App\Http\Controllers\PostController::class, "show"]);






Route::get("/flights/{flight}" , [App\Http\Controllers\FlightsController::class, 'show']);


Route::get("/utasok/create", [PassangerController::class, 'create']);
Route::get("/utasok/{utas}", [PassangerController::class, 'show']);
Route::post("/utasok" , [PassangerController::class, 'store']);


Route::get("/legitarsasag" , [AirlinesController::class, 'index']);
Route::get("/legitarsasag/create" , [App\Http\Controllers\AirlinesController::class, 'postcreate']);
Route::get("/legitarsasag/{legi}/edit" , [AirlinesController::class, 'edit']);
Route::put("/legitarsasag/{legi}" , [AirlinesController::class, 'update']);
Route::delete("/legitarsasag/{legi}" , [AirlinesController::class, 'destroy']);

Route::get("/legitarsasag/{legi}" , [AirlinesController::class, 'show']);
Route::post("/legitarsasag/mentes" , [AirlinesController::class, 'store'])->name("legimentes");

Route::get("/varos/create" , [App\Http\Controllers\CitiesController::class, 'postcreate']);
Route::post("/varos" , [CitiesController::class, 'store']);

Route::get("/kepfeltoltes", [PictureController::class, 'create']);
Route::get("/kepekmegtekintese", [PictureController::class, 'show']);
Route::post("/kepekmegtekintese", [PictureController::class, 'store'])->name("kepmentes");



Route::get("/{nev}", [App\Http\Controllers\OraiFController::class, "show"]);
