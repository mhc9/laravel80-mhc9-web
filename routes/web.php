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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

/** ================= รู้จักเรา ================= */
// ประวัติความเป็นมา
Route::get('/about', function() {
    return view('about');
});

// วิสัยทัศน์ พันธกิจ ค่านิยม
Route::get('/vision', function() {
    return view('vision');
});

// ผู้บริหารหน่วยงาน
Route::get('/executive', function() {
    return view('executive');
});

// โครงสร้างองค์กร
Route::get('/structure', function() {
    return view('structure');
});

// หน้าที่และอำนาจ
Route::get('/authority', function() {
    return view('authority');
});

// มาตรฐานการปฏิบัติงาน
Route::get('/procedures', function() {
    return view('procedure');
});

// มาตรฐานการให้บริการ
Route::get('/manuals', function() {
    return view('manual');
});

// นโยบายองค์กร
Route::prefix('policies')->group(function() {
    Route::get('/', function() {
        return view('policies.index');
    });
    
    Route::get('/pdpa', function() {
        return view('policies.pdpa');
    });
});

// มาตรฐานการให้บริการ
Route::get('/strategic-plans', function() {
    return view('strategic-plans.index');
});

// รายงานประจำปี
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

/** ================= บริการ ================= */
// ศูนย์ข้อมูลข่าวสาร
Route::get('/info-center', function() {
    return view('info-center');
});

// ศูนย์ราชการใสสะอาด
Route::get('/appeal', function() {
    return view('appeal');
});

// องค์กรคุณธรรมต้นแบบ
Route::get('/moral-org', function() {
    return view('moral-org.index');
});

// ITA
Route::get('/ita/risk-assessments', function() {
    return view('ita.risk-assessments.index');
});

Route::get('/appeal/culture', function() {
    return view('culture');
});

// คลังความรู้
Route::get('/knowledges', [App\Http\Controllers\KnowledgeController::class, 'getKnowledges']);

// บทความ
Route::get('/articles', [App\Http\Controllers\ArticleController::class, 'getArticles']);

// วีดิโอ
Route::get('/videos', [App\Http\Controllers\VideoController::class, 'getVideos']);

// อินโฟกราฟฟิก
Route::get('/infographics', [App\Http\Controllers\InfographicController::class, 'getInfos']);

// Q&A
Route::prefix('q&a')->group(function() {
    Route::get('/', function() {
        return view('q&a.index');
    });

    Route::get('/question', function() {
        return view('q&a.question', [
            'attributes' => [
                'data-theme' => 'dark',
                'data-type' => 'audio',
            ],
        ]);
    });

    Route::post('/question', [App\Http\Controllers\QuestionController::class, 'store']);
});

// E-Service
Route::get('/e-services', function() {
    return view('e-service');
});

// E-Report
Route::prefix('e-reports')->group(function() {
    Route::get('/', function() {
        return view('e-report.index');
    });

    Route::get('/mis', function() {
        return view('e-report.mis');
    });

    Route::get('/mis/project', function() {
        return view('e-report.project');
    });

    Route::get('/mis/corruption', function() {
        return view('e-report.corruption');
    });

    Route::get('/sat-servey', function() {
        return view('e-report.sat-servey');
    });

    Route::get('/data-catalog', [App\Http\Controllers\DataCatalogController::class, 'index']);
    Route::get('/data-catalog/{file}/{title}', [App\Http\Controllers\DataCatalogController::class, 'detail']);
});

Route::get('/downloads', [App\Http\Controllers\DownloadController::class, 'getDownloads']);

/** ================= ข่าวประชาสัมพันธ์ ================= */
Route::get('/posts', [App\Http\Controllers\PostController::class, 'getPosts']);
Route::get('/posts/{id}', [App\Http\Controllers\PostController::class, 'getPost']);
Route::get('/posts/category/{cate}', [App\Http\Controllers\PostController::class, 'getPostsByCategory']);
Route::get('/newses/category/{cate}', [App\Http\Controllers\NewsController::class, 'getPostsByCategory']);
Route::get('/onepages', [App\Http\Controllers\OnepageController::class, 'getOnepages']);

/** ================= ติดต่อเรา ================= */
Route::get('/contact', function() {
    return view('contact');
});

Route::get('/links', function() {
    return view('link');
});
