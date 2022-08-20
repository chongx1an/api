<?php

use App\Http\Controllers\Admin\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin API Routes
|--------------------------------------------------------------------------
|
|
*/

Route::controller(ProductController::class)->prefix('products')->group(function () {
  Route::get('/',          'list');
  Route::get('/{id}',      'get');
  Route::post('/',         'create');
  Route::put('/{id}',      'update');
  Route::put('/{id}',      'delete');
});
