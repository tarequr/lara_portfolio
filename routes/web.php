<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'FrontEnd\HomeController@index')->name('front.home');
Route::get('/resume/download/{id}', 'FrontEnd\HomeController@download')->name('resume.download');
Route::post('/user/send-message', 'FrontEnd\HomeController@message')->name('send.message');

Auth::routes();

Route::group(['namespace' => 'BackEnd', 'middleware' => ['auth'] ], function(){

    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    Route::prefix('profiles')->group(function(){
        Route::get('/view', 'ProfileController@view')->name('profiles.view');
        Route::get('/edit/', 'ProfileController@edit')->name('profiles.edit');
        Route::post('/update/', 'ProfileController@update')->name('profiles.update');
        Route::get('/password/view', 'ProfileController@passwordView')->name('profiles.password.view');
        Route::post('/password/update', 'ProfileController@passwordUpdate')->name('profiles.password.update');
    });

    Route::prefix('about')->group(function(){
        Route::get('/view', 'AboutController@index')->name('about.view');
        Route::get('/add', 'AboutController@create')->name('about.add');
        Route::post('/save', 'AboutController@store')->name('about.save');
        Route::get('/edit/{id}', 'AboutController@edit')->name('about.edit');
        Route::post('/update/{id}', 'AboutController@update')->name('about.update');
        Route::get('/delete/{id}', 'AboutController@delete')->name('about.delete');
    });

    Route::prefix('education')->group(function(){
        Route::get('/view', 'EducationController@index')->name('education.view');
        Route::get('/add', 'EducationController@create')->name('education.add');
        Route::post('/save', 'EducationController@store')->name('education.save');
        Route::get('/edit/{id}', 'EducationController@edit')->name('education.edit');
        Route::post('/update/{id}', 'EducationController@update')->name('education.update');
        Route::get('/delete/{id}', 'EducationController@delete')->name('education.delete');
    });

    Route::prefix('skill')->group(function(){
        Route::get('/view', 'SkillController@index')->name('skill.view');
        Route::get('/add', 'SkillController@create')->name('skill.add');
        Route::post('/save', 'SkillController@store')->name('skill.save');
        Route::get('/edit/{id}', 'SkillController@edit')->name('skill.edit');
        Route::post('/update/{id}', 'SkillController@update')->name('skill.update');
        Route::get('/delete/{id}', 'SkillController@delete')->name('skill.delete');
    });

    Route::prefix('experience')->group(function(){
        Route::get('/view', 'ExperienceController@index')->name('experience.view');
        Route::get('/add', 'ExperienceController@create')->name('experience.add');
        Route::post('/save', 'ExperienceController@store')->name('experience.save');
        Route::get('/edit/{id}', 'ExperienceController@edit')->name('experience.edit');
        Route::post('/update/{id}', 'ExperienceController@update')->name('experience.update');
        Route::get('/delete/{id}', 'ExperienceController@delete')->name('experience.delete');
    });
    
    Route::prefix('profile')->group(function(){
        Route::get('/view', 'ProfileInformController@index')->name('profile.view');
        Route::get('/add', 'ProfileInformController@create')->name('profile.add');
        Route::post('/save', 'ProfileInformController@store')->name('profile.save');
        Route::get('/edit/{id}', 'ProfileInformController@edit')->name('profile.edit');
        Route::post('/update/{id}', 'ProfileInformController@update')->name('profile.update');
        Route::get('/delete/{id}', 'ProfileInformController@delete')->name('profile.delete');
    });

    /*-------------------Under construction--------------*/

    Route::prefix('portfolio')->group(function(){
        Route::get('/view', 'PortfolioController@index')->name('portfolio.view');
        Route::get('/add', 'PortfolioController@create')->name('portfolio.add');
        Route::post('/save', 'PortfolioController@store')->name('portfolio.save');
        Route::get('/edit/{id}', 'PortfolioController@edit')->name('portfolio.edit');
        Route::post('/update/{id}', 'PortfolioController@update')->name('portfolio.update');
        Route::get('/delete/{id}', 'PortfolioController@delete')->name('portfolio.delete');
    });

    Route::prefix('client')->group(function(){
        Route::get('/view', 'ClientController@index')->name('client.view');
        Route::get('/add', 'ClientController@create')->name('client.add');
        Route::post('/save', 'ClientController@store')->name('client.save');
        Route::get('/edit/{id}', 'ClientController@edit')->name('client.edit');
        Route::post('/update/{id}', 'ClientController@update')->name('client.update');
        Route::get('/delete/{id}', 'ClientController@delete')->name('client.delete');
    });

    Route::prefix('contact')->group(function(){
        Route::get('/view', 'ContactController@index')->name('contact.view');
        //Route::get('/drafts-message', 'ContactController@draftMsg')->name('contact.drafts.message');
        Route::get('/delete/{id}', 'ContactController@delete')->name('contact.delete');
    });


});
