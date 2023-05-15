<?php

use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// for home
Route::get('/', [HomeController::class, 'index'])->name('home');
// for get data
Route::get('/usermeta', [HomeController::class, 'usermeta'])->name('usermeta');
// for view data
Route::get('/userview/{id}', [HomeController::class, 'userview'])->name('userview');
// for delete data
Route::get('/userdelete/{id}', [HomeController::class, 'userdelete'])->name('userdelete');
// for edite
Route::get('/useredite/{id}', [HomeController::class, 'useredite'])->name('useredite');
Route::get('/usereupdate/{id}', [HomeController::class, 'usereupdate'])->name('usereupdate');