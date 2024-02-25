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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/** รู้จักเรา */
Route::get('/about', function() {
    return view('about');
});

Route::get('/vision', function() {
    return view('vision');
});

Route::get('/executive', function() {
    return view('executive');
});

Route::get('/structure', function() {
    return view('structure');
});

Route::get('/authority', function() {
    return view('authority');
});

Route::get('/procedures', function() {
    return view('procedure');
});

Route::get('/manuals', function() {
    return view('manual');
});

// ...
Route::get('/annual-reports', function() {
    $reports = [
        [
            'id'        => 1,
            'title'     => "รายงานประจำปี 2566",
            'featured'  => "uploads/2024/01/Screenshot 2024-01-24 101332.png",
            'urls'      => "https://mhc9dmh.com/newweb/public/uploads/2024/01/0123202408375065af7ade1f6d5.pdf",
        ],
        [
            'id'        => 2,
            'title'     => "รายงานประจำปี 2565",
            'featured'  => "uploads/2024/01/Screenshot 2024-01-24 101433.png",
            'urls'      => "https://mhc9dmh.com/newweb/public/uploads/2024/01/0123202408361365af7a7d440ad.pdf",
        ]
    ];

    return view('annual-report', ['reports' => $reports]);
});

/** บริการ */
Route::get('/appeal', function() {
    return view('appeal');
});

Route::get('/articles', [App\Http\Controllers\ArticleController::class, 'getArticles']);

Route::get('/videos', [App\Http\Controllers\VideoController::class, 'getVideos']);

// ...
Route::get('/e-services', function() {
    return view('e-service');
});

Route::get('/e-reports', function() {
    return view('e-report');
});

Route::get('/sat-servey', function() {
    return view('sat-servey');
});

Route::get('/downloads', function() {
    return view('download');
});

/** ข่าวประชาสัมพันธ์ */
Route::get('/posts', [App\Http\Controllers\PostController::class, 'getPosts']);
Route::get('/posts/{id}', [App\Http\Controllers\PostController::class, 'getPost']);
Route::get('/newses/category/{cate}', [App\Http\Controllers\NewsController::class, 'getPostsByCategory']);

/** ติดต่อเรา */
Route::get('/contact', function() {
    return view('contact');
});

Route::get('/links', function() {
    return view('link');
});

/** Run into react fronend */
// Route::view('/{path?}', 'app');
