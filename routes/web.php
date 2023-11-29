<?php

use Illuminate\Support\Facades\Route;

/* Controllers */
use App\Http\Controllers\Etc;
use App\Http\Controllers\UserView;
use App\Http\Controllers\AdminView;
use App\Http\Controllers\EditView;
use App\Http\Controllers\HandleEdit;

/* Middlewares */
use App\Http\Middleware\AdminOnly;

/* Models */
use App\Models\ProductCategories;

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

Route::match(['get', 'post'], '/test', function (){
    return Etc::pageSettings();
});

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/{page}', UserView::class);

Route::group(['middleware' => AdminOnly::class], function (){
    Route::get('/admin/{page}', AdminView::class);
    Route::post('/admin/{page}/edit/{content}', HandleEdit::class);
});
