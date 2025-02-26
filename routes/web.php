<?php

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

Route::prefix("/")->name("front.")->group(function () {
  
  Route::view("", "front.pages.home")->name("index");
  Route::view("about", "front.pages.about")->name("about");
  Route::view("contact", "front.pages.contact")->name("contact");
  Route::view("projects", "front.pages.projects")->name("projects");
  Route::view("servicies", "front.pages.servicies")->name("servicies");
  Route::view("team", "front.pages.team")->name("team");
  Route::view("testmonials", "front.pages.testmonials")->name("testmonials");
});


