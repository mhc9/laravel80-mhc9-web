<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function() {
    Route::post('register', 'App\Http\Controllers\AuthController@register');
    Route::post('login', 'App\Http\Controllers\AuthController@login')->name('login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::get('me', 'App\Http\Controllers\AuthController@me');
});

Route::middleware('auth:api')->group(function() {
    /** Assets */
    Route::get('/assets', 'App\Http\Controllers\AssetController@getAll');
    Route::get('/assets/search', 'App\Http\Controllers\AssetController@search');
    Route::get('/assets/{id}', 'App\Http\Controllers\AssetController@getById');
    Route::get('/assets/init/form', 'App\Http\Controllers\AssetController@getInitialFormData');
    Route::post('/assets', 'App\Http\Controllers\AssetController@store');
    Route::put('/assets/{id}', 'App\Http\Controllers\AssetController@update');
    Route::delete('/assets/{id}', 'App\Http\Controllers\AssetController@destroy');
    Route::post('/assets/{id}/upload', 'App\Http\Controllers\AssetController@uploadImage');

    Route::get('/asset-types', 'App\Http\Controllers\AssetTypeController@getAll');

    Route::get('/asset-categories', 'App\Http\Controllers\AssetCategoryController@getAll');

    /** Employees */
    Route::get('/employees', 'App\Http\Controllers\EmployeeController@getAll');
    Route::get('/employees/search', 'App\Http\Controllers\EmployeeController@search');
    Route::get('/employees/{id}', 'App\Http\Controllers\EmployeeController@getById');
    Route::get('/employees/init/form', 'App\Http\Controllers\EmployeeController@getInitialFormData');
    Route::post('/employees', 'App\Http\Controllers\EmployeeController@store');
    Route::post('/employees/{id}', 'App\Http\Controllers\EmployeeController@update');
    Route::delete('/employees/{id}', 'App\Http\Controllers\EmployeeController@destroy');
    Route::post('/employees/{id}/upload', 'App\Http\Controllers\EmployeeController@uploadAvatar');

    /** Departments */
    Route::get('/departments', 'App\Http\Controllers\DepartmentController@getAll');
    Route::get('/departments/{id}', 'App\Http\Controllers\DepartmentController@getById');
    Route::post('/departments', 'App\Http\Controllers\DepartmentController@store');
    Route::put('/departments/{id}', 'App\Http\Controllers\DepartmentController@update');
    Route::delete('/departments/{id}', 'App\Http\Controllers\DepartmentController@destroy');

    /** Divisions */
    Route::get('/divisions', 'App\Http\Controllers\DivisionController@getAll');
    Route::get('/divisions/{id}', 'App\Http\Controllers\DivisionController@getById');
    Route::get('/divisions/init/form', 'App\Http\Controllers\DivisionController@getInitialFormData');
    Route::post('/divisions', 'App\Http\Controllers\DivisionController@store');
    Route::put('/divisions/{id}', 'App\Http\Controllers\DivisionController@update');
    Route::delete('/divisions/{id}', 'App\Http\Controllers\DivisionController@destroy');

    /** Members */
    Route::get('/members', 'App\Http\Controllers\MemberController@getAll');
    // Route::get('/members/search', 'App\Http\Controllers\MemberController@search');
    Route::get('/members/{id}', 'App\Http\Controllers\MemberController@getById');
    Route::get('/members/employee/{employeeId}', 'App\Http\Controllers\MemberController@getByEmployee');
    // Route::get('/members/init/form', 'App\Http\Controllers\MemberController@getInitialFormData');
    Route::post('/members', 'App\Http\Controllers\MemberController@store');

    /** Rooms */
    Route::get('/rooms', 'App\Http\Controllers\RoomController@getAll');
    Route::get('/rooms/{id}', 'App\Http\Controllers\RoomController@getById');
    Route::post('/rooms', 'App\Http\Controllers\RoomController@store');
    Route::put('/rooms/{id}', 'App\Http\Controllers\RoomController@update');
    Route::delete('/rooms/{id}', 'App\Http\Controllers\RoomController@destroy');

    /** Units */
    Route::get('/units', 'App\Http\Controllers\UnitController@getAll');
    Route::get('/units/{id}', 'App\Http\Controllers\UnitController@getById');
    Route::post('/units', 'App\Http\Controllers\UnitController@store');
    Route::put('/units/{id}', 'App\Http\Controllers\UnitController@update');
    Route::delete('/units/{id}', 'App\Http\Controllers\UnitController@destroy');

    /** Posts */
    Route::get('/posts', 'App\Http\Controllers\PostController@getAll');
    Route::get('/posts/search', 'App\Http\Controllers\PostController@search');
    Route::get('/posts/{id}', 'App\Http\Controllers\PostController@getById');
    Route::get('/posts/init/form', 'App\Http\Controllers\PostController@getInitialFormData');
    Route::post('/posts', 'App\Http\Controllers\PostController@store');
    Route::put('/posts/{id}', 'App\Http\Controllers\PostController@update');
    Route::delete('/posts/{id}', 'App\Http\Controllers\PostController@destroy');
});

Route::get('/posts', 'App\Http\Controllers\PostController@search');
Route::get('/posts/{id}', 'App\Http\Controllers\PostController@getById');

Route::get('/db-connection', function () {
    try {
        $dbconnect = \DB::connection()->getPDO();
        $dbname = \DB::connection()->getDatabaseName();

        echo "Connected successfully to the database. Database name is :".$dbname;
    } catch(Exception $e) {
        echo $e->getMessage();
    }
});
