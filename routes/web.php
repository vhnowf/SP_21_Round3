<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Feedback\FeedbackController;
use App\Http\Controllers\Inbox\InboxController;

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

    // Feedbacks 
    Route::delete('feedbacks/destroy', 'FeedbackController@massDestroy')->name('feedbacks.massDestroy');
    Route::resource('/feedbacks','FeedbackController');

    // Inboxs
    Route::get('/inbox', [InboxController::class, 'index'])->name('inbox.index');
    Route::get('/inbox/{id}', [InboxController::class, 'show'])->name('inbox.show');

});

Route::group(['middleware' => 'auth'], function (){
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/inbox', [InboxController::class, 'index'])->name('inbox.index');
    Route::get('/inbox/{id}', [InboxController::class, 'show'])->name('inbox.show');
    Route::get('/security', 'SecurityController@index')->name('security');
    Route::get('/service', 'ServiceController@index')->name('service');
    Route::get('/feedback', [FeedbackController::class,'show'])->name('feedback');
    Route::post('/feedback-store', [FeedbackController::class, 'store'])->name('feedback.store');
});


