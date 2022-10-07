<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;

/* php artisan route:list muestra el listado de las rutas que hay hasta el momento */

//V1
Route::apiResource('v1/posts', PostV1::class)
->only(['show', 'index', 'destroy']);

//V2
Route::apiResource('v2/posts', PostV2::class)
->only(['show', 'index'])
->middleware('auth:sanctum');

Route::post('login', [
    App\Http\Controllers\Api\LoginController::class,
    'login'
]);
