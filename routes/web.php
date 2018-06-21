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

Route::get('/','PagesController@home')->name('home');

Route::get('about','HistoryController@index');

Route::get('academic/{subs?}', ['uses' => 'AcademicController@index'])
    ->where(['subs' => '.*']);

Route::group([
    'prefix' => config('backpack.base.route_prefix', 'admin'),
    'middleware' => ['admin'],
    'namespace' => 'Admin'
], function() {
    // your CRUD resources and other admin routes here
    CRUD::resource('student', 'StudentCrudController');
    CRUD::resource('misc', 'MiscCrudController');
    CRUD::resource('level', 'LevelCrudController');
    CRUD::resource('schoolyear', 'SchoolYearCrudController');
    CRUD::resource('curriculum_management', 'CurriculumManagementCrudController');
    CRUD::resource('subject_management', 'SubjectManagementCrudController');
    CRUD::resource('year_management', 'YearManagementCrudController');
    CRUD::resource('section_management', 'SectionManagementCrudController');
    // CRUD::resource('tag', 'TagCrudController');
    CRUD::resource('reviewcarousel', 'ReviewcarouselCrudController');
    CRUD::resource('testimonial', 'TestimonialCrudController');
    CRUD::resource('historybanner', 'HistorybannerCrudController');
    CRUD::resource('aboutcontent', 'AboutcontentCrudController');
    CRUD::resource('contact', 'ContactCrudController');


    // Route::get('section_management/{id}/view', 'SectionManagementCrudController@View')->name('ViewSecion');
    Route::get('student/{students}/print', 'StudentPrintController@index');
    Route::get('misc/{students}/print', 'MiscPrintController@index');

});
