<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MenuController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/', function () {
    return 'User';
});
Route::ApiResource('menus', MenuController::class);
Route::get('root/public-menus', [MenuController::class, 'publicRootMenus'])->name('menus.publicRootMenus');
Route::get('root/admin-menus', [MenuController::class, 'adminRootMenus'])->name('menus.adminRootMenus');

