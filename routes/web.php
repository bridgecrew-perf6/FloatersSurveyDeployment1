<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\UsersExportController;
use App\Http\Controllers\ChartJsController;
use App\Http\Controllers\ff;


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
Route::get('/cookie-approval', function (Request $request) {
    //\Session()-put('approved',true);
   \Session()->put('cookieApproved',true);
    return true;
});
Route::get('/', function() {
    return redirect(app()->getLocale());
});
Route::group([
    'prefix' => '{locale}',
    'where' => ['locale' => '[a-zA-Z]{2}'],
    'middleware' => 'setLocale',
], function(){
    Route::get('/', function () {

        return view('/index');
    });
/*
    Route::get('/Combi', function () {
        return view('subviews.Combi');
    });
    Route::get('/transform', function () {
        return view('subviews.transform');
    });
    Route::get('/DD', function () {
        return view('subviews.DD');
    });
    Route::get('/create', function () {
        return view('create');
    });
*/
   


    Route::post('/results', [UsersController::class, 'store']);


    Route::view("home","home");
    Route::view("results","results");

    Route::get('/answers', [UsersController::class, 'export']);
    Route::get('/answers1', [UsersController::class, 'export1']);


    Route::get('/chartjs', [ChartJsController::class, 'chartjs']);
    Route::get('/ff', [ff::class, 'Chartjs1']);
    Route::any('update_chart', [ChartJsController::class, 'update_chart']);
    


});