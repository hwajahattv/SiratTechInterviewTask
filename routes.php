<?php

use Illuminate\Foundation\Auth\EmailVerificationRequest;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth as FacadesAuth;
use Illuminate\Http\Request;

// use Auth;

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

//        Getting data from List API
    $buffer=url('https://encore.mediaroom.com/api/newsfeed_releases/list.php');
    $xml = file_get_contents($buffer);
    $new = simplexml_load_string($xml);
    $jsonfile = json_encode($new);
    $array = json_decode($jsonfile, true);
//    dd($array);
    return view('welcome', ['releases' => $array['release']]);

});
Route::get('/fetchAPI/{id}', function ($id) {
//        Getting data from Details API
    $buffer=url('https://encore.mediaroom.com/api/newsfeed_releases/get.php?id='.$id);
    $xml = file_get_contents($buffer);
    $new = simplexml_load_string($xml);
    $jsonfile = json_encode($new);
    $array = json_decode($jsonfile, true);
    return view('details', ['release' => $array]);
});
