<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Ruta para /api/hello
Route::get('/hello', function () {
    return 'hello world';
   });
   // Ruta para /api/hello/{name}
   Route::get('/hello/{name}', function ($name) {
    return 'hello world ' . $name;
   });

   Route::get('/api/params/hello', function (Request $request) {
    $name = $request->query('name', 'world');
    return 'hello world ' . $name;
});

Route::get('/params/hello', [HelloController::class, 'greetWithParams']);