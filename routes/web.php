<?php

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
    $url = 'https://bimafy.com';
    return Redirect::to($url);
});

Route::fallback(function () {
  $url = Request::fullUrl();
  $searching_word = "bimabd.com";
  $replacing_word = "bimafy.com";
  $updated_url = str_replace( $searching_word, $replacing_word, $url );
  // echo Request::root();
  echo $updated_url;
});
