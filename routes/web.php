<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenusController;
use App\Http\Controllers\OrdersController;

// ==============Menu====================
Route::get('/', [MenusController::class,'index']
);
Route::get('/menus/create', [MenusController::class,'create']
);
Route::post('/menus/store', [MenusController::class,'store']
);
Route::get('/menus/{id}/show', [MenusController::class,'show']
);


// =======================================================

// ==============Order====================
Route::get('/orders', [OrdersController::class,'index']
 );
Route::post('/orders/create', [OrdersController::class,'create']
);
Route::post('/orders/store', [OrdersController::class,'store']
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