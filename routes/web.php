<?php
use App\Http\Controllers\Auth\LoginController;
use App\Models\User;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

/*Route::get('/Hello', function () {
    // return view('welcome');
     return 'Hello Word';
 });
 
 */
Route::get('/About', function () {
    // return view('welcome');
     return ('Pages.About');
 });
 Route::get('/users', function () {
    $users = \App\Models\User::all();
    $name = "John"; // Replace "John" with the actual name you want to display
    return view('users', ['users' => $users, 'name' => $name]);
});

// Registration routes
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');

// Login routes
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');


 

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

