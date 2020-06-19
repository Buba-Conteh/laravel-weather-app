<?php

use Illuminate\Http\Request;
// use Illuminate\Routing\Route;
use Zttp\Zttp;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/weather', function ()
{
    $key=config('services.darksky.key');
    $lat=request('lat');
    $lng=request('lng');
   $reponse=Zttp::get("https://api.darksky.net/forecast/$key/$lat,$lng?units=ca");
   return $reponse->json();
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
