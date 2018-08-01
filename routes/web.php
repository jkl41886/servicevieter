<?php

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

Auth::routes();
Route::group(['middleware' => ['auth']], function(){
    Route::get('/', function () {
        return view('welcome');
    })->name('welcome');

    Route::get('myproposals', function () {
        return view('user_panel.myProposals');
    })->name('myproposals');

    Route::get('myposts', function () {
        return view('user_panel.myPosts');
    })->name('myposts');


    Route::get('mycontracts', function () {
        return view('user_panel.myContracts');
    })->name('mycontracts');


    Route::get('myjobtasks', function () {
        return view('user_panel.myJobTasks');
    })->name('myjobtasks');


    Route::get('mypurchase', function () {
        return view('user_panel.myPurchase');
    })->name('mypurchase');

    Route::get('mypayments', function () {
        return view('user_panel.mypayments');
    })->name('mypayments');

    Route::get('mywarranty', function () {
        return view('user_panel.mywarranty');
    })->name('mywarranty');

    Route::get('myreviews', function () {
        return view('user_panel.myreviews');
    })->name('myreviews');

    Route::get('myappointments', function () {
        return view('user_panel.myAppointments');
    })->name('myappointments');

    Route::get('jobsearch', function () {
        return view('user_panel.searchAJob');
    })->name('job.search');

    Route::get('chat', function () {
        return view('user_panel.chat');
    })->name('chat');

    Route::get('settings', function () {
        return view('user_panel.settings');
    })->name('settings');
    Route::post('security_questions', 'Security_questionsController@show')
        ->name('security_questions');
    Route::post('security_questions/save', 'Security_questionsController@store')
        ->name('security_questions');
    Route::post('/image', 'Settings_securityController@image')->name('image');
    
});