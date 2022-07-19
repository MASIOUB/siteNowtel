<?php

use Illuminate\Support\Facades\Route;
use TCG\Voyager\Models\Role;

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


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

Route::get('page/{page_id}', [App\Http\Controllers\PageController::class, 'getPage'])->name('page@getPage');
Route::post('page/store', [App\Http\Controllers\PageController::class, 'storePage'])->name('page@store');
Route::get('section/{section_id}', [App\Http\Controllers\PageController::class, 'getSection'])->name('section@getsection');
Route::post('section/store', [App\Http\Controllers\PageController::class, 'storeSection'])->name('section@store');
Route::post('division/store', [App\Http\Controllers\PageController::class, 'storeDivision'])->name('division@store');
// Route::post('main/store', [\App\Http\Controllers\MainController::class, 'store'])->name('test@store');
Route::get('service', [App\Http\Controllers\ServiceController::class, 'index'])->name('service@index');
Route::get('/main', [
    'uses' => 'App\Http\Controllers\MainController@index',
    'as' => 'main'
]);

