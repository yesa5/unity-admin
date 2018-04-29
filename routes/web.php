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
    return view('admin');
})->name('admin');

Route::get('/division', "AdminController@addDiv");
Route::get("/cup","AdminController@addCup");
Route::get("/tour","AdminController@addTour");
Route::get("/team","AdminController@addTeam");
Route::get("/player","AdminController@addPlayer");
Route::get("/game","AdminController@addGame");
Route::get("/transfer","AdminController@makeTransfer");
Route::get("/promotion","AdminController@makePromotion");

Route::get("/editDivisions","AdminController@editDivs");
Route::get("/editCups","AdminController@editCups");
Route::get("/editTours","AdminController@editTours");
Route::get("/editTeams","AdminController@editTeams");
Route::get("/editPlayers","AdminController@editPlayers");
Route::get("/editGames","AdminController@editGames");

Route::post('/processAddDivision','AdminController@processAddDivision')->name('processAddDivision');
Route::post('/processAddCup','AdminController@processAddCup')->name('processAddCup');
Route::post('/processAddTour','AdminController@processAddTour')->name('processAddTour');
Route::post('/processAddTeam','AdminController@processAddTeam')->name('processAddTeam');
Route::post('/processAddPlayer','AdminController@processAddPlayer')->name('processAddPlayer');
Route::post('/processAddGame','AdminController@processAddGame')->name('processAddGame');
Route::post('/processMakeTransfer','AdminController@processMakeTransfer')->name('processMakeTransfer');
Route::post('/processMakePromotion','AdminController@processMakePromotion')->name('processMakePromotion');
Route::get('/transfers/{id}','AdminController@transfer')->name('makeTransfer');
Route::get('/transfersT/{id}','AdminController@transferT');
Route::get('/transfersP/{id}','AdminController@transferP');

Route::post('/processEditDivision/{id}','AdminController@processEditDivision')->name('processEditDivision');
Route::post('/processEditCup/{id}','AdminController@processEditCup')->name('processEditCup');
Route::post('/processEditTour/{id}','AdminController@processEditTour')->name('processEditTour');
Route::post('/processEditTeam/{id}','AdminController@processEditTeam')->name('processEditTeam');
Route::post('/processEditPlayer/{id}','AdminController@processEditPlayer')->name('processEditPlayer');
Route::post('/processEditGame/{id}','AdminController@processEditGame')->name('processEditGame');

Route::get('/processEditDivisions/{id}','AdminController@processEditDivisions')->name('processEditDivisions');
Route::get('/processEditCups/{id}','AdminController@processEditCups')->name('processEditCups');
Route::get('/processEditTours/{id}','AdminController@processEditTours')->name('processEditTours');
Route::get('/processEditTeams/{id}','AdminController@processEditTeams')->name('processEditTeams');
Route::get('/processEditPlayers/{id}','AdminController@processEditPlayers')->name('processEditPlayers');
Route::get('/processEditGames/{id}','AdminController@processEditGames')->name('processEditGames');
