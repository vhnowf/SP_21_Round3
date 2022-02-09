<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Feedback\FeedbackController;
use App\Http\Controllers\Inbox\InboxController;
use App\Http\Controllers\ReturnProduct\ReturnProductController;
use App\Http\Controllers\Comment\CommentController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\Insurance\InsuranceController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin'], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    // Inbox
    Route::get('/inbox', [InboxController::class, 'index'])->name('inbox.index');
    Route::get('/inbox/{id}', [InboxController::class, 'show'])->name('inbox.show');

    // Feedback
    Route::resource('/feedbacks','FeedbackController');
    Route::delete('feedbacks/destroy', 'FeedbackController@destroy')->name('feedbacks.massDestroy');

    // Return Product
    Route::resource('/returnproducts','ReturnProductController');
   // Route::get('/returnproduct-lists','ReturnProductController@index')->name('returnproduct.index');
    //Route::get('/returnproduct','ReturnProductController@show')->name('returnproduct.show');
    Route::delete('returnproduct/destroy', 'ReturnProductController@destroy')->name('returnproduct.destroy');

});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', 'HomeController@index')->name('home');

    // Inbox
    Route::get('/inbox', [InboxController::class, 'index'])->name('inbox.index');
    Route::get('/inbox/{id}', [InboxController::class, 'show'])->name('inbox.show');

    // Security
    Route::get('/security', 'SecurityController@index')->name('security');

    //Service
    Route::get('/service', 'ServiceController@index')->name('service');

    //Feedback
    Route::get('/feedback', [FeedbackController::class,'show'])->name('feedback');
    Route::post('/feedback-store', [FeedbackController::class, 'store'])->name('feedback.store');

    //Comment 
    Route::post('product/1/comment/store',  [CommentController::class,'store'])->name('comments.store');
    
    //Insurance 
    Route::get('/insurance',  [InsuranceController::class,'index'])->name('insurance.index');
    Route::get('/insurance/search',  [InsuranceController::class,'search'])->name('insurance.search');

    //Return Product
    Route::get('/returnproduct', [ReturnProductController::class,'index'])->name('returnproduct.index');
    Route::post('/returnproduct-store', [ReturnProductController::class, 'store'])->name('returnproduct.store');
    Route::post('/returnproduct/storeMedia', [ReturnProductController::class, 'storeMedia'])->name('returnproduct.storeMedia');

});

Route::get('feedbacks', [App\Http\Controllers\Api\Admin\FeedbackController::class,'index']);
Route::get('feedbacks/{id}', [App\Http\Controllers\Api\Admin\FeedbackController::class,'show']);
Route::post('feedback', [App\Http\Controllers\Api\FeedbackController::class,'store']);
Route::delete('feedbacks/{id}',[App\Http\Controllers\Api\Admin\FeedbackController::class,'destroy']);
Route::get('/article/Theo-doi-tinh-trang-don-hang-1542942316341cks', [QuestionController::class,'first'])->name('question.first');
Route::delete('/comment/{id}','Api\CommentController@destroy');

Route::get('product/1',  [CommentController::class,'index'])->name('comment.index');




