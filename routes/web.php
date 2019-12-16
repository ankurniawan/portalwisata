<?php

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
    return view('index');
});

Route::get('/sejarah', function () {
    return view('sejarah');
});

Route::get('/maps', 'PortalController@create');
Route::post('/maps/post', 'PortalController@post');

Route::get('/museum', function () {
    return view('museum');
});

Route::get('/jejamuran', function () {
    return view('jejamuran');
});

Route::get('/rosella', function () {
    return view('rosella');
});

Route::get('/ratuboko', function () {
    return view('ratuboko');
});

Route::get('/prambanan', 'PortalController@index');

Route::get('/sindukusuma', function () {
    return view('sindukusuma');
});

Route::get('/kembang', function () {
    return view('kembang');
});

Route::get('/jogjabay', function () {
    return view('jogjabay');
});

Route::get('/monjali', function () {
    return view('monjali');
});

Route::get('/bluelagoon', function () {
    return view('bluelagoon');
});

Route::get('/upsidedown', function () {
    return view('upsidedown');
});

Route::get('/sate', function () {
    return view('sate');
});

Route::get('/kuliner', function () {
    return view('kuliner');
});
Route::get('/rekreasi', function () {
    return view('rekreasi');
});

Route::get('/sijeckex', function () {
    return view('sijeckex');
});

Route::get('/tengkleng', function () {
    return view('tengkleng');
});

Route::get('/bakmi', function () {
    return view('bakmi');
});

Route::get('/klotok', function () {
    return view('klotok');
});

Route::get('/sateratu', function () {
    return view('sateratu');
});

Route::get('/satebathok', function () {
    return view('satebathok');
});

Route::get('/entok', function () {
    return view('entok');
});

Route::get('/angkringan', function () {
    return view('angkringan');
});