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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::redirect("/", "/letter");

Route::prefix("letter")->group(function() {
    Route::get("/", "LetterController@index")->name("letter.index");
    Route::get("/create", "LetterController@create")->name("letter.create");
    Route::post("/store", "LetterController@store")->name("letter.store");
    Route::get("/delete/{letter}", "LetterController@delete")->name("letter.delete");

    Route::get("/add_participant/{letter}", "ParticipantController@create")->name("participant.create");
    Route::post("/add_participant/{letter}", "ParticipantController@store")->name("participant.store");
});

Route::get("participant/{participant}/delete", "ParticipantController@delete")->name("participant.delete");



