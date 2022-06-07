<?php
use App\Models\mangers;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\ManagersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
This is route code 
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/managers/register', [ManagersController::class, 'register'])->name('managers/register');
Route::post('/managers/register', [ManagersController::class, 'store'])->name('managers/register');
Auth::routes();
Route::get('/home', [App\Http\controllers\HomeControllers ::class, 'index'])->name('home');
Route::get('/managers/list', [ManagersController::class, 'get_all'])->name('managers/list');
Route::get('/managers/edit/{id}', [ManagersController::class, 'edit']);
Route::post('/managers/update',[ManagersController::class,'update'])->name('managers/update');
Route::get('/managers/delete/{id}', [ManagersController::class, 'delete']);
Route::get('/managers/search/{id}', [ManagersController::class, 'search'])->name('managers/search');




