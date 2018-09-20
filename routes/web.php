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



Route::get('/', array('as' => 'dashboard', 'uses' => 'DashboardController@getDashboard'));
Route::post('names', array('as' => 'names.post', 'uses' => 'DashboardController@postNames'));
Route::post('score', array('as' => 'score.post', 'uses' => 'DashboardController@postScores'));
Route::get('delete/{id}', array('as' => 'score.delete', 'uses' => 'DashboardController@deleteScore'));
Route::post('update', array('as' => 'names.update', 'uses' => 'DashboardController@updateNames'));
Route::post('reset', array('as' => 'reset', 'uses' => 'DashboardController@resetAll'));
Route::get('rules', array('as' => 'rules', 'uses' => 'DashboardController@getRules'));