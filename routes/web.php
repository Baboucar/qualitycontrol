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
//move later
//Route::get('/', 'MainController@course');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('landing');

//course
Route::get('course', 'CourseController@create');
Route::post('course', 'CourseController@store');

//organization
Route::get('organization', 'OrganizationController@create');
Route::post('organization', 'OrganizationController@store');

//student engagement
Route::get('engagement', 'EngagementController@create');
Route::post('engagement', 'EngagementController@store');

//support
Route::get('support', 'SupportController@create');
Route::post('support', 'SupportController@store');

//feedback
Route::get('feedback', 'FeedbackController@create');
Route::post('feedback', 'FeedbackController@store');


//analysis
Route::get('analysis', 'AnalysisController@index');
Route::post('analysis', 'AnalysisController@getCourse');

//ajax calls 
Route::get('attendance', 'FeedbackController@getAttendanceData');
Route::get('degree', 'FeedbackController@getDegreeRequirementData');
Route::get('grade', 'FeedbackController@getGradeData');
Route::get('effectiveness', 'FeedbackController@getEffectivenessData');
Route::get('support_chart', 'SupportController@getChartData');
Route::get('engagement_chart', 'EngagementController@getChartData');
Route::get('organization_chart', 'OrganizationController@getChartData');


