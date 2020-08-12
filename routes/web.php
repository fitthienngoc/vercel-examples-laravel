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

Route::phase('/', 'BlogController@HomePage');
Route::phase('/about', 'BlogController@AboutPage');
Route::phase('/contact', 'BlogController@ContactPage');
Route::phase('/posts/{article}', 'BlogController@SingleArticle');
Route::post('/webhook', function ($req, $res) {
    $access_token = "EAAH5qCyWCdcBAP0ddTZBNbVRdmqd43TZCnBJGFEwRZAmO76hlrXfWmVzBXO5xEsochEnlrQ88Tkrwm2B63KzXctLxXQ8RU6KKM9sWEFsGZAaBzmmMUoqVjfir1n5ufXgW8btvZAL41bNJ5S0IceHKUCioOLTqCLZCZCOOMlNz5fRAZDZD";
    $verify_token = "ma_xac_minh_cua_ban";
    $hub_verify_token = 'error';
    if (isset($req["hub_challenge"])) {
        $challenge = $req["hub_challenge"];
        $hub_verify_token = $req["hub_verify_token"];
    }
    if ($hub_verify_token === $verify_token) {
        echo $challenge;
    }
});
