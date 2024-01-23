<?php

use App\Http\Controllers\ItemGroupsController;
use App\Http\Controllers\ItemsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/items', [ItemsController::class, "index"])->name("items");
Route::post('/add-item', [ItemsController::class, "add"])->name("add-item");
Route::get('/edit-item/{id}', [ItemsController::class, "edit"])->name("edit-item");
Route::get('/delete-item/{id}', [ItemsController::class, "remove"])->name("delete-item");
Route::post('/update-item', [ItemsController::class, "update"])->name("update-item");


Route::get('/itemGroups', [ItemGroupsController::class, "index"])->name("item-groups");
Route::post('/add-item-group', [ItemGroupsController::class, "add"])->name("add-item-group");
Route::get('/edit-item-group/{id}', [ItemGroupsController::class, "edit"])->name("edit-item-group");
Route::get('/delete-item-group/{id}', [ItemGroupsController::class, "remove"])->name("delete-item-group");
Route::post('/update-item-group', [ItemGroupsController::class, "update"])->name("update-item-group");
