<?php

use App\Http\Controllers\Editor\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// posts viewers routes 
Route::get('/', function () {
    return view('index');
});

Route::get('/blog-post',[PostController::class,'show'])->name('showblogpost');




//editor route
Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', function () {
        return view('editor.dashboard');
    
    })->name('dashboard');

    Route::get('/create',[PostController::class,'index'])->name('editor.createpost');
    Route::post('/createpost',[PostController::class,'store'])->name('editor.storepost');


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


require __DIR__.'/auth.php';
