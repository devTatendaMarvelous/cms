<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\PaymentsController;

  Route::get('/', [MenusController::class,'index']
          );
          
Route::middleware(['auth'])->group(function () {
  // =====================USERS======================================
Route::get('/users',[UserController::class,'getUsers']);
Route::get('/users/create',[UserController::class,'create']);
Route::post('/users/store',[UserController::class,'store']);
Route::get('/users/{id}/edit', [UserController::class, 'edit']);
Route::get('/users/{id}/delete', [UserController::class, 'deleteUser']);
route::post('/users/{id}/update', [UserController::class, 'updateUser']);
// =============================================================================================================
  //===========USER PROFILES=====
route::get('/profile/{id}', [UserProfileController::class, 'index']);
route::post('/profile/{id}/edit', [UserProfileController::class, 'update']);
route::post('/profile/{id}/password', [UserProfileController::class, 'password']);
// ===========================================================================================================================
          
// ==============Menu====================
         Route::get('/menus', [MenusController::class,'menus']
          );
           Route::post('/menus/search', [MenusController::class,'index']
          );
          Route::get('/menus/create', [MenusController::class,'create']
          );
          Route::post('/menus/store', [MenusController::class,'store']
          );
          Route::get('/menus/{id}/show', [MenusController::class,'show']
          );
          Route::get('/menus/{id}/edit', [MenusController::class,'edit']
          );
          Route::post('/menus/{id}/update', [MenusController::class,'update']
          );
           Route::get('/menus/{id}/delete', [MenusController::class,'destroy']
          );
// =======================================================
// ==============Order====================
          Route::get('/orders', [OrdersController::class,'index']
          );
            Route::get('/orders/client', [OrdersController::class,'client']
          );
          Route::post('/orders/create', [OrdersController::class,'create']
          );
          Route::post('/orders/store', [OrdersController::class,'store']
          );
           Route::post('/orders/paid', [OrdersController::class,'paid']
          );
          
          Route::get('/orders/{id}/edit', [OrdersController::class,'edit']
          );
          Route::post('/orders/{id}/update', [OrdersController::class,'update']
          );

          Route::get('/orders/{id}/show', [OrdersController::class,'show']
          );
          Route::post('/orders/pay', [OrdersController::class,'pay']
          );
// =======================================================

// ==============Feedback====================
          Route::get('/feedbacks', [FeedbackController::class,'index']
          );
            Route::get('/feedbacks/client', [FeedbackController::class,'client']
          );
          Route::get('/feedbacks/create', [FeedbackController::class,'create']
          );
          Route::post('/feedbacks/store', [FeedbackController::class,'store']
          );
          Route::get('/feedbacks/{id}/edit', [FeedbackController::class,'edit']
          );
          Route::post('/feedbacks/{id}/update', [FeedbackController::class,'update']
          );

          Route::get('/feedbacks/{id}/show', [FeedbackController::class,'show']
          );
          Route::post('/feedbacks/pay', [FeedbackController::class,'pay']
          );
// =======================================================


 Route::get('/makepayment', [PaymentsController::class,'index']
          );
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
