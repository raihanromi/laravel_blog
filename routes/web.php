<?php

use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Editor\PostController;
use App\Http\Controllers\ViewerPostController;

// posts viewers routes 

Route::get('/',[ViewerPostController::class,'showAllPost'])->name('showAllPost');

Route::get('/blog-post',[PostController::class,'show'])->name('showblogpost');


//editor route
Route::middleware(['auth'])->group(function(){

    Route::get('/dashboard', function () {
        $editor_post = Post::where('user_id',Auth::user()->id)->get();
        return view('editor.dashboard',compact('editor_post'));
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
