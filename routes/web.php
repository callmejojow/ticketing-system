<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TicketController;

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
    return view('base');
});


Route::name('tickets.')->group(function(){

Route::get('/tickets',[TicketController::class,'index'])->name('index');

Route::get('/tickets/{id}/show',[TicketController::class,'show'])->name('show')
    ->missing(function(){
        return response()->view('notfound');
    });

Route::patch('/tickets/{id}/update',[TicketController::class,'update'])->name('update');

Route::post('/tickets/create',[TicketController::class,'store'])->name('store');

Route::get('tickets/create',[TicketController::class,'create'])->name('create');

Route::delete('/tickets/{id}/delete',[UserController::class,'destroy'])->name('destroy');

});
