<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Resources\PocketResource;
use App\Http\Resources\ContentResource;

use App\Models\Pocket;
use App\Models\Content;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'AuthController@register');
// Login User
Route::post('login', 'AuthController@login');


//Route::prefix('auth')->group(function () {
    Route::prefix('v1')->group(function () {

        Route::get('/pockets', function () {
           // return PocketResource::collection(Pocket::all());
           return ContentResource::collection(Content::all());
        });

        Route::post('/pockets', 'PocketController@store');


        Route::get('/pockets/{id}/contents', function ($id) {
            return new PocketResource(Pocket::findOrFail($id));
        });

        Route::post('pockets/{id}/contents', 'ContentController@store');

        
        Route::get('/contents', function () {
            return ContentResource::collection(Content::all());
        });

        Route::delete('/contents/{id}', 'ContentController@destroy');

    

            // Below mention routes are public, user can access those without any restriction.
            // Create New User
      
            // Refresh the JWT Token
        Route::get('refresh', 'AuthController@refresh');
            
            //Route::apiResource('pockets', 'PocketController');

            
            
            //Route::post('api/v1/pockets', 'PocketController@store');
            
            // Below mention routes are available only for the authenticated users.
            
            
        Route::middleware('auth:api')->group(function () {
                // Get user info
            Route::get('user', 'AuthController@user');
                // Logout user from application
            Route::post('logout', 'AuthController@logout');
            });
        });
//});
