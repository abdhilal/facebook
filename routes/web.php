<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FriendsController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\testcontroller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




//posts
Route::post('post/create', [PostController::class,'store'])->name("post.create");
Route::get('post/show',[PostController::class,'show'])->name('show');
Route::get('post/edit/{id}',[PostController::class,'edit'])->name('edit');
Route::post('post/update/{id}',[PostController::class,'update'])->name('update');
Route::get('post/destroy/{id}',[PostController::class,'destroy'])->name('destroy.post');
Route::get('post/search',[PostController::class,'search'])->name('post.search');


//comments
Route::post('post/comment/{PostId}',[CommentController::class,'store'])->name('create.comment');
Route::get('post/comments/{PostId',[CommentController::class,'show'])->name('show.cooment');



//profile
Route::post('edit/save',[AuthController::class,'edit_save'])->name('edit.save');
route::get('edit/profile',[AuthController::class,'edit_profile'])->name('edit.profile');
route::get('profile',function(){return view('profile.profile');})->name('profile');

//test
route::get('profiles/{id}',[FriendsController::class,'friends'])->name('profiles');
route::get('test/{id}',[FriendsController::class,'addfriend'])->name('addfriend');
route::get('testt/{id}',[FriendsController::class,'accspted'])->name('accspted');

Route::get('show',function(){
    return view('indexxx');
})->name('show.test');
Route::post("/test",[testcontroller::class,'search'])->name('search.test');
// Route::get("/showw",[testcontroller::class,'index'])->name('showww');


require __DIR__.'/auth.php';
