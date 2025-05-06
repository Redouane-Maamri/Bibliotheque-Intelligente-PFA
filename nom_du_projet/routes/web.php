<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\adminController;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::view('/accueil', 'accueil')->name('Accueil');
Route::view('/about', 'about')->name('AboutUs');
Route::view('/contact', 'contact')->name('ContactUs');

Route::view('/', 'home')->name('home');


Route::get('/books', [UserController::class, 'index'])->name('books.index');
Route::get('/books/filter-by-categorie', [UserController::class, 'FilterByCategorie'])->name('books.filterByCategorie');

Route::get('/admin', [UserController::class, 'admin'])->name('books.admin');
Route::get('/books/create', [UserController::class, 'create'])->name('books.create');
Route::post('/books/store', [UserController::class, 'store'])->name('books.store');
Route::get('/books/{id}', [UserController::class, 'show'])->name('books.show');
Route::get('/books/{id}/edit', [UserController::class, 'edit'])->name('books.edit');
Route::put('/books/{id}', [UserController::class, 'update'])->name('books.update');
Route::delete('/books/{id}', [UserController::class, 'destroy'])->name('books.destroy');
Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');
Route::view('/adminlogin', 'books.form')->name('admin.form'); // View login form (GET)

Route::get('/admin/login', [adminController::class, 'showlogin'])->name('books.form'); // Handle POST (login)
Route::post('/admin/login', [adminController::class, 'login'])->name('admin.login');

Route::get('/contacts', [ContactUsController::class, 'index'])->name('contacts.index');





require __DIR__.'/auth.php';
