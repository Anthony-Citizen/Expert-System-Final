<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConnectorController;

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

//Route::get('/', [UserHomeController::class, 'index']);

Route::get('/', function () {
    return view('v_home');
});

Route::get('/about', function () {
    return view('v_about');
});

Route::get('/history', function () {
    return view('v_history');
});

Route::get('/connector', [ConnectorController::class, 'index']);
Route::post('/connector/{id}', [ConnectorController::class, 'next']);
