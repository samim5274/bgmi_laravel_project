<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

// Static pages
Route::view('/', 'welcome');
Route::view('/about', 'about');
Route::view('/contact', 'contact');
Route::view('/blog', 'blog-header');

// Admission
Route::view('/admission-50%-off', 'admission');
Route::view('/admission', 'admission-2');

// Courses
Route::prefix('course')->group(function () {
    // Graphic Design
    Route::view('/basic-graphic-design', 'course.basic-graphic-design');
    Route::view('/advance-graphic-design', 'course.advance-graphic-design');
    Route::view('/motion-graphic-design', 'course.motion-graphic-design');
    Route::view('/ux-ui-graphic-design', 'course.ux-ui-graphic-design');

    // Web Development
    Route::view('/full-stack-web-development', 'course.full-stack-web-development');
    Route::view('/front-end-development', 'course.front-end-development');
    Route::view('/back-end-development', 'course.back-end-development');

    // Digital Marketing
    Route::view('/digital-marketing', 'course.digital-marketing');
    Route::view('/search-engine-optimization', 'course.search-engine-optimization');
    Route::view('/social-media-marketing', 'course.social-media-marketing');
});

// Blogs
Route::view('/graphic-design-blog', 'blogs.graphic-design-blog');
Route::view('/web-development-blog', 'blogs.web-development-blog');
Route::view('/admission-blog', 'blogs.admission-blog');
Route::view('/digital-marketing-blog', 'blogs.digital-marketing-blog');
