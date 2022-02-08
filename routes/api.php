<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CommentController;
use App\Http\Controllers\Api\InsuranceController;
use App\Http\Controllers\Api\FeedbackController;
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
/**
 * Route::group(['prefix'=>'product/{id}'],function(){
*  Route::get('/comment', [CommentController::class,'show']);
  *  Route::post('/comment',  [CommentController::class,'create']);
 *   Route::get('/insurance',  [InsuranceController::class,'show']);
 *   Route::delete('insurance', [InsuranceController::class,'destroy']);
*});
*Route::delete('/comment/{id}',  [CommentController::class,'destroy']);
*Route::post('insurance', [InsuranceController::class,'store']);
*Route::get('feedbacks', 'Api\Admin\FeedbackController@index');
*Route::get('feedbacks/{id}', 'Api\Admin\FeedbackController@show');
 */

