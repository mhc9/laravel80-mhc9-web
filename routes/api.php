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
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::get('me', 'App\Http\Controllers\AuthController@me');
});

Route::middleware('auth:api')->group(function() {
    Route::get('/jobs', 'App\Http\Controllers\JobController@getAll');
    Route::get('/jobs/{id}', 'App\Http\Controllers\JobController@getById');

    Route::get('/equipments', 'App\Http\Controllers\EquipmentController@getAll');
    Route::get('/equipments/{id}', 'App\Http\Controllers\EquipmentController@getById');
    Route::post('/equipments', 'App\Http\Controllers\EquipmentController@store');

    Route::get('/equipment-types', 'App\Http\Controllers\EquipmentTypeController@getAll');

    Route::get('/equipment-groups', 'App\Http\Controllers\EquipmentGroupController@getAll');

    Route::get('/assets', 'App\Http\Controllers\AssetController@getAll');
    Route::get('/assets/{id}', 'App\Http\Controllers\AssetController@getById');
    Route::post('/assets', 'App\Http\Controllers\AssetController@store');

    Route::get('/asset-types', 'App\Http\Controllers\AssetTypeController@getAll');

    Route::get('/asset-categories', 'App\Http\Controllers\AssetCategoryController@getAll');

    Route::get('/suppliers', 'App\Http\Controllers\SupplierController@getAll');
    Route::get('/suppliers/{id}', 'App\Http\Controllers\SupplierController@getById');
    Route::post('/suppliers', 'App\Http\Controllers\SupplierController@store');

    Route::get('/contents', 'App\Http\Controllers\WebDataController@getAll');
});

Route::get('/db-connection', function () {
    try {
        $dbconnect = \DB::connection()->getPDO();
        $dbname = \DB::connection()->getDatabaseName();

        echo "Connected successfully to the database. Database name is :".$dbname;
    } catch(Exception $e) {
        echo $e->getMessage();
    }
});
