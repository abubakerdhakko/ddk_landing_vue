<?php

use Illuminate\Http\Request;

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

// Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/banner', 'BannerController@get');
    Route::put('/banner', 'BannerController@update');

    // About
    Route::get('/about', 'AboutController@get');
    Route::put('/about', 'AboutController@updatedescription');
    Route::get('/aboutlist', 'AboutController@getlist');
    Route::post('/aboutlist', 'AboutController@addlist');
    Route::post('/deleteaboutlist', 'AboutController@deletelist');
    Route::put('/aboutlist', 'AboutController@updatelist');

    // Roadmap
    Route::get('/roadmap', 'RoadmapController@get');
    Route::post('/roadmap', 'RoadmapController@insert');
    Route::put('/roadmap', 'RoadmapController@update');
    Route::post('/deleteroadmaplist', 'RoadmapController@delete');

    //tokensale
    Route::get('/tokensalelist', 'TokensaleController@getlist');
    Route::post('/tokensalelist', 'TokensaleController@addlist');
    Route::post('/deletetokensalelist', 'TokensaleController@deletelist');
    Route::put('/tokensalelist', 'TokensaleController@updatelist');

    //contact
    Route::get('/contact', 'ContactController@get');
    Route::put('/contact', 'ContactController@update');


    //Team
    Route::get('/team', 'TeamController@get');
    Route::post('/team', 'TeamController@insert');
    Route::put('/team', 'TeamController@update');
    Route::post('/deleteteammember', 'TeamController@delete');
    Route::get('/teamorder', 'TeamController@getorders');



// });