<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| BasicPoint Landing Page Route
|--------------------------------------------------------------------------
|
| The landing page currently renders entirely from placeholder arrays
| defined inside each section's Blade file. When the Institute
| Management System is ready, replace this closure with a controller
| (e.g. LandingPageController@index) that fetches Teachers, Programs,
| Routine, Notices, Events, Gallery items, Testimonials, etc. from the
| database and passes them to frontend.index as view data — each
| section file is already written to accept that data via the same
| variable names it currently defines locally.
|
*/

Route::view('/', 'frontend.index')->name('home');
