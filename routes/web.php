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
    return redirect('pockets');
});

Route::get('pockets', 'PocketController@index');
Route::get('create-new-content/{pocketID}', 'ContentController@index');
Route::get('pocket/show', 'PocketController@show');
Route::get('pocket/new', 'PocketController@addForm');



Route::post('api/v1/pockets/{id}/contents', 'ContentController@store');

/*Route::get('{any}', function () {
    return view('app');
})->where('any', '.*');

//Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/



