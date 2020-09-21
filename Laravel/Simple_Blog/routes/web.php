<?php
use App\Http\Controllers\ItemController;
use App\Models\item;
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
/*Route::get('/', function () {
    return view('items');
});*/
//Route::resource('items','ItemController');

Route::resource('items',ItemController::class);
//Route::resource('items', ItemController::class)->middleware('auth');

/*Route::middleware(['auth:sanctum','verified']->get('/dashboard,function()){
    return view('dashboard');
})->name('dashboard');
*/
/*Route::middleware(['auth:sanctum','verified'])->get('/dashboard',function(){
    return view('dashboard');
    })->name('dashboard');
*/
//Route::get('edit/{id}', [ItemController::class, 'edit']);

/*
Route::get('/add', function () {
    return view('add');
});

Route::get('/delete', function () {
    return view('delete');
});
*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'items.index'])->name('home');
//Route::get('/home', [App\Http\Controllers\HomeController::class, 'dashboard'])->name('home');
