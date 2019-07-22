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
use App\About;
use App\AboutList;
use App\Banner;
use App\Contacts;
use App\Roadmap;
use App\TokenSale;
use App\Team;

Auth::routes();

Route::get('/', function () {
    $about = About::all();
    $aboutlist = AboutList::all();
    $banner = Banner::all();
    $contacts = Contacts::all();
    $roadmap = Roadmap::all();
    $team = Team::all();
    $tokensale = TokenSale::all();
    $monthsarray = [
        'January',
        'Feburary',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    ];
    return view('landingpage', [
                                'about' => $about,
                                'aboutlist' => $aboutlist,
                                'banner' => $banner,
                                'contacts' => $contacts,
                                'roadmap' => $roadmap,
                                'tokensale' => $tokensale,
                                'team' => $team,
                                'months' => $monthsarray
                                ]);
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin', 'HomeController@index')->name('admin');
    Route::get('/admin/about', 'HomeController@index')->name('admin-about');
    Route::get('/admin/roadmap', 'HomeController@index')->name('admin-roadmap');
    Route::get('/admin/tokensale', 'HomeController@index')->name('admin-tokensale');
    Route::get('/admin/contact', 'HomeController@index')->name('admin-contact');
    Route::get('/admin/team', 'HomeController@index')->name('admin-team');
    Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
});