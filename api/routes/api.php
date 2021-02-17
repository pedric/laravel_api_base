<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostsController;
use App\Http\Controllers\FilesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('posts', [PostsController::class,  'getPolls']);

Route::get('posts/{id}', [PostsController::class,  'getPoll']);

Route::post('post', [PostsController::class, 'store']);

Route::put('posts/{post}', [PostsController::class, 'update']);

Route::delete('posts/{post}', [PostsController::class, 'delete']);

// files
Route::get('files/get', [FilesController::class, 'show']);

Route::post('files/create', [FilesController::class, 'create']);