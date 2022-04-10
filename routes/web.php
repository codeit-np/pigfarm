<?php

use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Backend\AccountsController;
use App\Http\Controllers\Backend\BreedController;
use App\Http\Controllers\Backend\EventController;
use App\Http\Controllers\Backend\ExpenseController;
use App\Http\Controllers\Backend\FeedsController;
use App\Http\Controllers\Backend\FeedTypeController;
use App\Http\Controllers\Backend\GroupsController;
use App\Http\Controllers\Backend\IncomeController;
use App\Http\Controllers\Backend\PigController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\TransactionController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('setting',SettingController::class);
Route::resource('feed',FeedsController::class);
Route::resource('feedtype',FeedTypeController::class);
Route::resource('breed',BreedController::class);
Route::resource('group',GroupsController::class);
Route::resource('subcategories',SubCategoryController::class);
// Route::resource('expenses',ExpenseController::class);
Route::resource('event',EventController::class);
Route::resource('transaction',TransactionController::class);
Route::resource('pig',PigController::class);

