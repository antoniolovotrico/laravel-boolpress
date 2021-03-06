<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

// Route to articles Api
Route::get('articles', function()
{
    return response()->json([
        'success' => true,
        'data' => App\Article::all()
    ], 200);

});

// Route to categories Api
Route::get('categories', function()
{
    return response()->json([
        'success' => true,
        'data' => App\Category::all()
    ], 200);

});

// Route to tags Api
Route::get('tags', function()
{
    return response()->json([
        'success' => true,
        'data' => App\Tag::all()
    ], 200);

});