<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\projects;
use App\Http\Controllers\ProjectController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('/projects/all', [ProjectController::class, 'index']);
// Route::get('projects/{Project_Ref}', [ProjectController::class, 'show']);
Route::get('projects/country/{Country}', [ProjectController::class, 'show_country']);
Route::get('projects/{Status}', [ProjectController::class, 'show_status']);
// Route::get('projects', 'ProjectController@index');
// Route::get('projects/{Project_Ref}', 'ProjectController@show');
// Route::get('projects/{Country}', 'ProjectController@show_country');
// Route::get('projects/{Status}', 'ProjectController@show_status');
 
